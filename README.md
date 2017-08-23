<p align="center"><img height="250" src="http://i.imgur.com/UtTIlBO.png"></p>

<h1 align="center">Linker</h1>

<p align="center">
    <a href="https://styleci.io/repos/76742350"><img src="https://styleci.io/repos/76742350/shield?style=flat&branch=master" alt="StyleCI"></a>
    <a href="https://github.com/24aitor/Linker/releases"><img src="https://poser.pugx.org/aitor24/linker/v/stable.svg" alt="Version"></a>
    <a href="https://raw.githubusercontent.com/24aitor/linker/master/LICENSE"><img src="https://poser.pugx.org/aitor24/linker/license.svg" alt="License"></a>
</p>


Simple Laravel package to ensure that links are under https when it's needed, for avoid problems loading assets under SSL.

## Getting Started

This package only needs to register the service provider, then it will force https automatically.

### Register Service Provider

```
Aitor24\Linker\LinkerServiceProvider::class,
```

<hr>

**INFO:** This package has been recoded without functions since version 2.0 to save response time, and clean your code.
