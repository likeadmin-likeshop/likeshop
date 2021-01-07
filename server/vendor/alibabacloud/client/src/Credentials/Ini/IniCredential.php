<?php

namespace AlibabaCloud\Client\Credentials\Ini;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Clients\Client;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class IniCredential
 *
 * @package   AlibabaCloud\Client\Credentials\Ini
 */
class IniCredential
{
    use CreateTrait;
    use OptionsTrait;

    /**
     * @var array
     */
    private static $hasLoaded;

    /**
     * @var string
     */
    protected $filename;

    /**
     * IniCredential constructor.
     *
     * @param string $filename
     */
    public function __construct($filename = '')
    {
        $this->filename = $filename ?: $this->getDefaultFile();
    }

    /**
     * Get the default credential file.
     *
     * @return string
     */
    public function getDefaultFile()
    {
        return self::getHomeDirectory() . DIRECTORY_SEPARATOR . '.alibabacloud' . DIRECTORY_SEPARATOR . 'credentials';
    }

    /**
     * Gets the environment's HOME directory.
     *
     * @return null|string
     */
    private static function getHomeDirectory()
    {
        if (getenv('HOME')) {
            return getenv('HOME');
        }

        return (getenv('HOMEDRIVE') && getenv('HOMEPATH'))
            ? getenv('HOMEDRIVE') . getenv('HOMEPATH')
            : null;
    }

    /**
     * Clear credential cache.
     *
     * @return void
     */
    public static function forgetLoadedCredentialsFile()
    {
        self::$hasLoaded = [];
    }

    /**
     * Get the credential file.
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param array  $array
     * @param string $key
     *
     * @return bool
     */
    protected static function isNotEmpty(array $array, $key)
    {
        return isset($array[$key]) && !empty($array[$key]);
    }

    /**
     * @param string $key
     * @param string $clientName
     *
     * @throws ClientException
     */
    public function missingRequired($key, $clientName)
    {
        throw new ClientException(
            "Missing required '$key' option for '$clientName' in " . $this->getFilename(),
            SDK::INVALID_CREDENTIAL
        );
    }

    /**
     * @return array|mixed
     * @throws ClientException
     */
    public function load()
    {
        // If it has been loaded, assign the client directly.
        if (isset(self::$hasLoaded[$this->filename])) {
            /**
             * @var $client Client
             */
            foreach (self::$hasLoaded[$this->filename] as $projectName => $client) {
                $client->name($projectName);
            }

            return self::$hasLoaded[$this->filename];
        }

        return $this->loadFile();
    }

    /**
     * Exceptions will be thrown if the file is unreadable and not the default file.
     *
     * @return array|mixed
     * @throws ClientException
     */
    private function loadFile()
    {
        if (!\AlibabaCloud\Client\inOpenBasedir($this->filename)) {
            return [];
        }

        if (!\is_readable($this->filename) || !\is_file($this->filename)) {
            if ($this->filename === $this->getDefaultFile()) {
                // @codeCoverageIgnoreStart
                return [];
                // @codeCoverageIgnoreEnd
            }
            throw new ClientException(
                'Credential file is not readable: ' . $this->getFilename(),
                SDK::INVALID_CREDENTIAL
            );
        }

        return $this->parseFile();
    }

    /**
     * Decode the ini file into an array.
     *
     * @return array|mixed
     * @throws ClientException
     */
    private function parseFile()
    {
        try {
            $file = \parse_ini_file($this->filename, true);
            if (\is_array($file) && $file !== []) {
                return $this->initClients($file);
            }
            throw new ClientException(
                'Format error: ' . $this->getFilename(),
                SDK::INVALID_CREDENTIAL
            );
        } catch (\Exception $e) {
            throw new ClientException(
                $e->getMessage(),
                SDK::INVALID_CREDENTIAL,
                $e
            );
        }
    }

    /**
     * Initialize clients.
     *
     * @param array $array
     *
     * @return array|mixed
     * @throws ClientException
     */
    private function initClients($array)
    {
        foreach (\array_change_key_case($array) as $clientName => $configures) {
            $configures     = \array_change_key_case($configures);
            $clientInstance = $this->createClient($clientName, $configures);
            if ($clientInstance instanceof Client) {
                self::$hasLoaded[$this->filename][$clientName] = $clientInstance;
                self::setClientAttributes($configures, $clientInstance);
                self::setCert($configures, $clientInstance);
                self::setProxy($configures, $clientInstance);
            }
        }

        return isset(self::$hasLoaded[$this->filename])
            ? self::$hasLoaded[$this->filename]
            : [];
    }
}
