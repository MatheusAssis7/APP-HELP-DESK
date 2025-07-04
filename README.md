# Projeto Help Desk

Este projeto é um sistema de Help Desk desenvolvido para gerenciar a abertura e consulta de chamados.

## 🚀 Funcionalidades

* **Abertura de Chamados:** Usuários podem abrir novos chamados.
* **Consulta de Chamados:**
    * Usuários comuns podem visualizar apenas os chamados que eles mesmos abriram.
    * Administradores têm permissão para visualizar todos os chamados.

## 🛠️ Tecnologias Utilizadas

* **Front-end:**
    * HTML
    * CSS
    * Bootstrap
* **Back-end:**
    * PHP

## 🔒 Autenticação e Dados

* **Sistema de Login:** Utiliza sessões PHP para autenticação.
* **Armazenamento de Dados:** Os dados dos chamados e informações de usuários (administradores) são persistidos em arquivos locais, definidos em uma lista "hard coded" para simplificar.
