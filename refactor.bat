@del %2.orig %2.rej
@php refactor.phar %* | patch -p1
