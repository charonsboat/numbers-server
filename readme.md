numbers-server
==============

UPDATE: This will now become the backend server to host the numbers application and the numbers package itself will be moved into its own source repo to be composer-ready.

This is a simple API that converts numbers to the corresponding word forms. It will accept multiple configuration parameters to determine the output format and type of the generated words.

**Example:**

This is the generated json output when passed a get parameter of ```1337```

```json
{"number":1337,"words":"one thousand three hundred thirty-seven"}
```

authors
=======
David Myers (drmyersii)
