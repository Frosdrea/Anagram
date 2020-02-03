Anagram
========================

Anagram class to check if all strings are anagrams

Usage
-----

Call `check` method on `Anagram` class to check if all strings are anagrams.
You can pass as many strings as you want. Only case insensitive characters, not spaces or punctuation are counted.

```
Anagram::check('Elvis', 'lives') // true
Anagram::check('E!@lvIS', 'liv ES%', 'elvis') // true
Anagram::check('Elvis', 'lifes') // false
```