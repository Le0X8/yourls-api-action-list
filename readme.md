# Plugin for YOURLS 1.6+: Custom API Action (list all keywords)

This plugin adds a custom API action at `list` to show all keywords used:

## Sample result

Using a URL such as `https://alfa.bravo/yourls-api.php?username=charlie&password=delta&action=list&format=json`:

```json
{
  "statusCode": 200,
  "message": "success",
  "result": [
    {
      "keyword": "alfa"
    },
    {
      "keyword": "bravo"
    },
    {
      "keyword": "charlie"
    }
  ]
}

```

# Setup

1. Upload this folder to `/user/plugins`.
2. Activate this plugin from the Plugins administration page.
