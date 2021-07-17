<?php
$exports = <<<'JSON'
{
  "name": "security",
  "module": "auth",
  "action": "provider",
  "options": {
    "secret": "46*oL-%9Duwayne-Domesticated",
    "provider": "Static",
    "users": {
      "lukner": "63*pE-%5Speedboat-Juniors"
    },
    "perms": {
      "admin": [
        "lukner"
      ]
    },
    "domain": "newphoe.com",
    "path": "/pta",
    "secure": true,
    "sameSite": "Strict"
  },
  "meta": [
    {
      "name": "identity",
      "type": "text"
    }
  ]
}
JSON;
?>