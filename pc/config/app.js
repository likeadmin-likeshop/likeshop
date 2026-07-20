
// Set PC_API_BASE_URL for a separate API host during local development.
// An empty production value keeps the PC build same-origin with /pc/.
const configuredUrl = process.env.PC_API_BASE_URL || ''
const config = {
  baseUrl: configuredUrl
}

export default config
