# RCM Code Style Guide

Este repositório contém os padrões de estilo de programação da **RCM**, estabelecendo uma forma consistente de escrever código em **PHP, JavaScript e CSS**, tornando-o mais legível, previsível e fácil de manter.

A adoção destas convenções melhora a colaboração da equipe, reduz erros e facilita a evolução dos sistemas, independentemente de quem escreveu o código original.

## 🛠️ Padrões de Linguagem

### PHP (PSR-1 / PSR-12)

- **Tags:** Os arquivos devem usar apenas as tags `<?php` e `<?=`.
- **Codificação:** Somente UTF-8 sem BOM.
- **Símbolos e Efeitos:** Arquivos devem declarar símbolos (classes, funções, constantes) ou causar efeitos colaterais, mas não ambos.
- **Autoloading:** Namespaces e classes devem seguir os padrões PSR-0 ou PSR-4.
- **Nomenclatura:**
  - **Classes:** Declaradas em `PascalCase`.
  - **Métodos:** Declarados em `camelCase`.
  - **Constantes:** Letras maiúsculas separadas por sublinhado.
- **Estrutura da Classe:** Deve seguir a ordem: 1. Traits; 2. Constantes; 3. Propriedades; 4. Métodos.
- **Regras Adicionais:** Uma declaração por linha, visibilidade explícita (public, protected, private) e uso de `declare(strict_types=1)` na primeira linha.

### JavaScript (Airbnb Style Guide)

- **Variáveis:** Usar sempre `const` ou `let` (nunca `var`), declaradas uma por linha.
- **Strings:** Usar Template strings para concatenação.
- **Comparações:** Usar estritamente `===` e `!==`.
- **Funções:** Usar _Arrow functions_ para funções curtas e preferir métodos de array (`map`, `filter`) em vez de loops tradicionais.
- **Organização:** Imports devem estar sempre no topo do arquivo.
- **Nomenclatura:** `PascalCase` para classes, `camelCase` para variáveis/funções e `UPPER_CASE` para constantes.

### CSS (Google CSS Guide)

- **Seletores:** Evitar seletores excessivamente específicos e IDs (#id) para estilização.
- **Hierarquia:** Preferir classes a seletores de tag e não depender da estrutura do DOM.
- **Manutenção:** Evitar seletores encadeados profundamente e o uso de `!important`.
- **Nomenclatura:** Usar `kebab-case` para nomes de classes, refletindo a função e não a aparência.
- **Práticas:** Evitar abreviações obscuras e estilos inline.

## 🤖 Automação de Padrões

A formatação visual do código é automatizada para garantir consistência, enquanto as regras semânticas e estruturais dependem do critério do programador.

### Instalação

Para configurar as ferramentas automaticamente em seu ambiente, execute:

```bash
# Instala a biblioteca de padrões
composer require rcm-cabos-eletricos/dev-standards

# Copia as configurações e instala os plugins no VS Code
vendor/rcm-cabos-eletricos/dev-standards/scripts/install.sh
```
