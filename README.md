<p align="center"><img height="250" src="http://i.imgur.com/UtTIlBO.png"></p>

<h1 align="center">Linker</h1>

# Linker

[![StyleCI](https://styleci.io/repos/76742350/shield?branch=master)](https://styleci.io/repos/76742350)
[![GitHub license](https://img.shields.io/github/license/24aitor/linker.svg?style=flat-square)](https://raw.githubusercontent.com/24aitor/linker/master/LICENSE)

Simple Laravel package to ensure that links are under https when it's needed, for avoid problems loading assets under SSL.

## Getting Started

This package only needs to register the service provider, then it will force https automatically.

### Register Service Provider

```
Aitor24\Linker\LinkerServiceProvider::class,
```

<hr>

**INFO:** This package has been recoded without functions since version 2.0 to save response time, and clean your code.
