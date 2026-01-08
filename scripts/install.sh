#!/usr/bin/env bash

set -e

echo "▶ Instalando padrões de desenvolvimento..."

# 1️⃣ Copiar arquivos de configuração
php "$(dirname "$0")/install.php"

# 2️⃣ Instalar extensões do VS Code (se possível)
if command -v code >/dev/null 2>&1; then
  echo "▶ Instalando extensões do VS Code..."
  code --install-extension junstyle.php-cs-fixer
  code --install-extension esbenp.prettier-vscode
  code --install-extension shufo.vscode-blade-formatter
else
  echo "⚠ VS Code CLI não encontrado (code). Pulei instalação das extensões."
fi

echo "✅ Dev standards aplicados com sucesso."
