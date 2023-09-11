# Plugin for YOURLS 1.6+: Custom API Action (list all keywords & URLs)

This plugin adds a custom API action at `list` to show all keywords used:

## Sample result

Using a URL such as `https://leox.li/yourls-api.php?signature=1002a612b4&action=list&format=json`:

```json
{
  "statusCode": 200,
  "message": "success",
  "result": [
    {
      "keyword": "website",
      "url": "https://leox.dev/"
    },
    {
      "keyword": "donald",
      "url": "https://donald.org/"
    },
    {
      "keyword": "gh",
      "url": "https://github.com/Le0X8/yourls-api-action-list"
    }
  ]
}

```

# Setup

1. Upload this folder to `/user/plugins`.
2. Activate this plugin from the Plugins administration page.
