# Projeto - Movimentação Bancária

Este projeto é uma aplicação **console** desenvolvida em **PHP**, que simula uma movimentação bancária. O usuário pode realizar diversas operações, como verificar o saldo, sacar, depositar e encerrar o programa. A aplicação utiliza conceitos de funções e manipulação de variáveis por referência.

---

## Funcionalidades Principais

1. **Exibir Menu de Opções:**
    - Mostra as opções disponíveis para o usuário (ver saldo, sacar, depositar e sair).

2. **Ver Saldo:**
    - Exibe o saldo atual do usuário.

3. **Sacar:**
    - Permite que o usuário saque um valor de sua conta.
    - O sistema verifica se o valor é válido e se há saldo suficiente antes de realizar a operação.

4. **Depositar:**
    - Permite que o usuário deposite um valor em sua conta.

5. **Sair do Programa:**
    - Finaliza a execução da aplicação.

---

## Estrutura do Código

### Arquivos e Suas Responsabilidades

- **`index.php`**
    - Arquivo principal que inicializa o programa, exibe o menu e chama as funções relacionadas às operações bancárias.

- **`Menu.php`**
    - Função que exibe as opções disponíveis para o usuário.

- **`MostrarSaldo.php`**
    - Função que exibe o saldo atual do usuário.

- **`Sacar.php`**
    - Função responsável pela operação de saque, alterando o saldo com base no valor informado.

- **`Depositar.php`**
    - Função responsável pela operação de depósito, atualizando o saldo do usuário.

---

## Como Executar o Projeto

1. **Clone o repositório.**

2. **Certifique-se de ter o PHP instalado no seu ambiente:**
    - Caso não tenha, instale o PHP através do [site oficial](https://www.php.net/downloads) ou utilizando um servidor local como [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou [Laragon](https://laragon.org/).

3. **Execute o programa:**
    - Abra o terminal e navegue até a pasta onde o projeto foi clonado.
    - Execute o comando: `php index.php`.
    - Siga as instruções exibidas no console.

---

## Tecnologias Utilizadas

- **PHP 8+:** Linguagem de programação utilizada para desenvolver a aplicação.

---

## Autor
Lucas Degrande
