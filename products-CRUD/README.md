# 📦 Products CRUD - Laravel (SQLite)

Aplicação em **Laravel 12** para gerenciar produtos com funcionalidades de **Create (Criar), Read (Ler), Update (Atualizar) e Delete (Excluir)**.

---

## ⚙️ Requisitos

Antes de começar, certifique-se de ter instalado:

- PHP >= 8.1  
- Composer  
- Node.js e NPM  
- Laravel Installer (apenas se for criar novos projetos)

### Instalando PHP, Composer e Laravel Installer

Se você não tiver, use os comandos abaixo:

- **macOS:**
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

- **Windows (PowerShell):**
```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

- **Linux:**
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

Mais detalhes: [Documentação oficial Laravel 12](https://laravel.com/docs/12.x).

---

## 📥 Instalação do projeto

1. **Clone o repositório**
```bash
git clone https://github.com/vicentematheus15/PHP.git
cd PHP/products-CRUD
```

2. **Instale as dependências do Laravel**
```bash
composer install
```

3. **Instale as dependências do frontend**
```bash
npm install
```

4. **Configure o ambiente**
```bash
cp .env.example .env
```
> No arquivo `.env`, certifique-se que o banco esteja configurado para SQLite:
```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

5. **Crie o banco de dados SQLite**
```bash
mkdir -p database
touch database/database.sqlite
```

6. **Gere a chave da aplicação**
```bash
php artisan key:generate
```

7. **Execute as migrações**
```bash
php artisan migrate
```

8. **Compile os assets**
```bash
npm run build
```

---

## 🚀 Executando o projeto

1. **Inicie o servidor**
```bash
php artisan serve
```

2. **Abra no navegador**
```
http://127.0.0.1:8000
```

---

## 🛠 Funcionalidades

- CRUD completo de produtos  
- Validação de dados (preço não negativo)  
- Uso de banco SQLite por padrão  

---

## 📚 Mais informações

- [Documentação oficial Laravel 12](https://laravel.com/docs/12.x)
