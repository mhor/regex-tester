#Regex Tester [![Build Status](https://travis-ci.org/mhor/regex-tester.svg?branch=master)](https://travis-ci.org/mhor/regex-tester) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mhor/regex-tester/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mhor/regex-tester/?branch=master) [![Coverage Status](https://coveralls.io/repos/mhor/regex-tester/badge.png?branch=master)](https://coveralls.io/r/mhor/regex-tester?branch=master)


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
