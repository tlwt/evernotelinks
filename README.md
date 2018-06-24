# evernotelinks
Linking features are very restricted in evernote. It is not (easily) possible to put mailto links etc into notes. This is a little workaround


# how to

workaround

```
docker-compose up
```

and then create your own links:

``` http://localhost/mailto/mail(at)tillwitt.de/cc/me(at)tillwitt.de/subject/test/body/Hallo;so_zum_test_nochmal/
```

This will be auto redirected to a mailto link.

* ```(at)``` will be replaced as @
* ```_``` will be a space
* ```;``` will be a new line
