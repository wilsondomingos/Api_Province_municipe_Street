
# API de Localizações de Angola
### Províncias, Municípios e Distritos/Ruas

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![API](https://img.shields.io/badge/REST-API-005571?style=for-the-badge&logo=api&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

> **Descrição:** Uma API RESTful robusta e otimizada desenvolvida em Laravel, fornecendo dados geográficos oficiais da República de Angola. Ideal para sistemas de e-commerce, logística, cadastros de usuários e aplicações que necessitam de validação de endereços angolanos.

---

## 📑 Índice

1. [Funcionalidades](#-funcionalidades)
2. [Requisitos](#-requisitos)
3. [Instalação](#-instalação)
4. [Configuração](#-configuração)
5. [Endpoints da API](#-endpoints-da-api)
6. [Exemplos de Resposta](#-exemplos-de-resposta)
7. [Tratamento de Erros](#-tratamento-de-erros)
8. [Contribuição](#-contribuição)
9. [Licença](#-licença)

---

## ✨ Funcionalidades

- 🗺️ **Cobertura Completa:** Todas as 18 províncias de Angola.
- 🏙️ **Hierarquia:** Relacionamento completo (Província → Município → Distrito/Rua).
- ⚡ **Performance:** Respostas JSON leves e otimizadas com Eloquent Resources.
- 🔍 **Busca:** Endpoints de pesquisa por nome ou código postal.
- 🛡️ **Segurança:** Proteção CSRF e rate limiting configurado.
- 📦 **Fácil Integração:** Documentação clara e padrões RESTful.

---

## 🛠 Requisitos

Antes de começar, certifique-se de que seu ambiente possui:

- **PHP** >= 8.1
- **Composer** instalado globalmente
- **MySQL** ou MariaDB
- **Git** para clonar o repositório

---

## 🚀 Instalação

Siga o passo a passo para rodar o projeto localmente:

### 1. Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/Api_Province_municipe_Street.git
cd Api_Province_municipe_Street

