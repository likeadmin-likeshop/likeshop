<?php

namespace app\common\server;

use Exception;
use think\facade\Cache;

class CaptchaService
{
    const CHARS = '0123456789';
    const LENGTH = 4;
    const EXPIRE_SECONDS = 60;
    const CACHE_PREFIX = 'captcha:';

    /**
     * @notes 创建图形验证码
     * @return array
     * @throws Exception
     */
    public static function create()
    {
        $code = self::createCode();
        $key = md5(uniqid((string) random_int(100000, 999999), true));

        Cache::set(self::CACHE_PREFIX . $key, $code, self::EXPIRE_SECONDS);

        return [
            'key' => $key,
            'image' => 'data:image/png;base64,' . base64_encode(self::drawImage($code)),
            'expire' => self::EXPIRE_SECONDS,
        ];
    }

    /**
     * @notes 校验图形验证码，一次性消费
     * @param string $key
     * @param string $code
     * @return bool
     */
    public static function verify($key, $code)
    {
        $cacheKey = self::CACHE_PREFIX . trim((string) $key);
        $captcha = Cache::get($cacheKey);
        Cache::rm($cacheKey);

        if (empty($captcha)) {
            return false;
        }

        return hash_equals($captcha, strtolower(trim((string) $code)));
    }

    /**
     * @notes 创建验证码字符
     * @return string
     * @throws Exception
     */
    private static function createCode()
    {
        $code = '';
        $maxIndex = strlen(self::CHARS) - 1;

        for ($i = 0; $i < self::LENGTH; $i++) {
            $code .= self::CHARS[random_int(0, $maxIndex)];
        }

        return $code;
    }

    /**
     * @notes 绘制验证码图片
     * @param string $code
     * @return string
     * @throws Exception
     */
    private static function drawImage($code)
    {
        $width = 120;
        $height = 42;
        $image = imagecreatetruecolor($width, $height);
        $backgroundColor = imagecolorallocate($image, 245, 247, 250);
        imagefilledrectangle($image, 0, 0, $width, $height, $backgroundColor);

        for ($i = 0; $i < 5; $i++) {
            $lineColor = imagecolorallocate(
                $image,
                random_int(90, 180),
                random_int(90, 180),
                random_int(90, 180)
            );

            imageline(
                $image,
                random_int(0, $width),
                random_int(0, $height),
                random_int(0, $width),
                random_int(0, $height),
                $lineColor
            );
        }

        for ($i = 0; $i < 120; $i++) {
            $pixelColor = imagecolorallocate(
                $image,
                random_int(120, 220),
                random_int(120, 220),
                random_int(120, 220)
            );
            imagesetpixel(
                $image,
                random_int(0, $width - 1),
                random_int(0, $height - 1),
                $pixelColor
            );
        }

        for ($i = 0; $i < self::LENGTH; $i++) {
            $textColor = imagecolorallocate(
                $image,
                random_int(20, 90),
                random_int(20, 90),
                random_int(20, 90)
            );
            imagestring(
                $image,
                5,
                18 + $i * 23,
                random_int(10, 18),
                $code[$i],
                $textColor
            );
        }

        ob_start();
        imagepng($image);
        $content = ob_get_clean();
        imagedestroy($image);

        return $content;
    }
}
