## Site Institucional — Etec Zona Leste (Laravel)

Este projeto foi desenvolvido em **Laravel** para criar um **site institucional** da **Etec Zona Leste**, contendo páginas informativas, navegação, identidade visual e um formulário de contato com validação.

---

## O que foi feito no projeto

### 1) Rotas (navegação do site)
Foram criadas rotas nomeadas para as páginas principais do site:

- `/` → `site.index`
- `/cursos` → `site.cursos`
- `/sobre-nos` → `site.sobrenos`
- `/galeria` → `site.galeria`
- `/contato` (GET) → `site.contato`
- `/contato` (POST) → `site.contato.enviar` (envio do formulário)

Arquivo: `routes/web.php`

---

### 2) Controller (lógica das páginas)
Foi criado o controller `EtecController`, responsável por retornar as views do site:

- `index()` → Home
- `cursos()` → Cursos
- `sobreNos()` → Sobre Nós
- `galeria()` → Galeria
- `contato()` → Contato
- `enviarContato()` → valida e processa o formulário

Arquivo: `app/Http/Controllers/EtecController.php`

---

### 3) Views (Blade Templates)
As páginas foram criadas em Blade e todas estendem o layout base:

- Layout: `resources/views/site/layouts/basico.blade.php`
- Home: `resources/views/site/index.blade.php`
- Cursos: `resources/views/site/cursos.blade.php`
- Sobre Nós: `resources/views/site/sobrenos.blade.php`
- Galeria: `resources/views/site/galeria.blade.php`
- Contato: `resources/views/site/contato.blade.php`

Além disso, o formulário de contato foi separado como componente reutilizável:

- Componente do formulário: `resources/views/site/layouts/_components/form_contato.blade.php`

---

### 4) Formulário de contato (validação e envio)
O formulário envia via POST para `/contato`.

- Valida os campos: `nome`, `email`, `assunto`, `mensagem`
- Exibe mensagem de sucesso ou lista de erros
- Registra os dados no log da aplicação (não exige banco de dados)
- Possui botões **Enviar** e **Limpar**

Arquivos:
- `app/Http/Controllers/EtecController.php` (método `enviarContato`)
- `resources/views/site/contato.blade.php`
- `resources/views/site/layouts/_components/form_contato.blade.php`

---

### 5) Estilo e identidade visual
Foi criado um CSS básico com a identidade visual da Etec:

- Vermelho: `#B11116`
- Branco e Cinza escuro
- Layout com menu, container e rodapé sempre no final da tela (sticky footer)

Arquivo: `public/css/estilo_basico.css`

---

### 6) Imagens
Foram adicionadas imagens em `public/` e exibidas nas páginas:

- Home: `public/img1.jpg`
- Cursos: `public/img2.jpg`
- Sobre Nós: `public/img3.jpg`
- Galeria: `public/img4.jpg`
- Logo no topo: `public/img5.jpg`

---

### 7) Ajustes para funcionar sem banco de dados
Para evitar erro de conexão com MySQL, o projeto foi configurado para não depender do banco em recursos básicos:

- Sessão: `SESSION_DRIVER=file`
- Cache: `CACHE_STORE=file`
- Fila: `QUEUE_CONNECTION=sync`

Arquivo: `.env`

---

## Como executar o projeto

### Requisitos
- PHP 8.2+
- Composer

### Passo a passo
1. Instalar dependências:
   - `composer install`

2. Criar `.env` (se necessário):
   - `copy .env.example .env`
   - Windows (PowerShell): 'copy .env.example .env' 
   - Linux/Mac: 'cp .env.example .env'

3. Gerar chave da aplicação:
   - `php artisan key:generate`

4. Configurar o Banco de Dados (Necessário para as rotas):

- Opção Rápida (SQLite): No arquivo .env, mude para DB_CONNECTION=sqlite, crie um arquivo vazio chamado database.sqlite na pasta database/ e rode php artisan migrate.
- - Crie o arquivo do banco via terminal:
- Windows (PowerShell): New-Item -Path database -Name database.sqlite -ItemType File
- Linux/Mac: touch database/database.sqlite

- Opção Padrão (MySQL): Crie um banco chamado pyetro no seu MySQL (XAMPP) e rode php artisan migrate.

5. Iniciar o servidor:
   - `php artisan serve`

Acesse:
- `http://127.0.0.1:8000`

---

## Testes manuais (o que validar)
- Navegação no menu: Home / Cursos / Sobre Nós / Galeria / Contato
- Imagens carregando nas páginas (exceto Contato)
- Formulário:
  - Enviar com campos vazios → mostra erros
  - Enviar preenchido → mostra sucesso
  - Botão Limpar → limpa campos

---

## Autor
- Nome: Pyetro Felizardo
- Turma: 3 DS Manhã
- Data: 01/04/2026
