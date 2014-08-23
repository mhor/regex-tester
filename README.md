#Regex Tester

##Configuration file example
```json
[
    {
        "find": true,
        "subject": "mhor@gmail.com"
    },
    {
        "find": false,
        "subject": "mhor@gmail"
    },
    {
        "find": false,
        "subject": "regular@mail.com"
    }
]
```

##Using

```bash
$ bin/regex-tester "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}\$#" test/fixtures/regexTest.json
```

Will produce:

![example](/test/fixtures/example.png)

##LICENSE
See `LICENSE` for more information
