<p align="center">
  <img src="https://raw.githubusercontent.com/tortadecodigos/assets/main/logo-tdc.svg" alt="Torta de Códigos" height="100" />
</p>

<p align="center">
  <strong>Base WordPress Starter Theme da Torta de Códigos</strong><br>
  Construído sobre o Sage, com Blade, TailwindCSS e Vite
</p>

---

## 🍰 tdc-base

Este repositório é a base oficial de desenvolvimento de temas WordPress da **Torta de Códigos**, pensado para produtividade, performance e consistência em todos os projetos.

### ⚙️ Tecnologias
- Laravel Blade para templating organizado e limpo
- TailwindCSS v4 com design system via CSS Custom Properties
- Vite para build rápido e hot reload
- Acorn para integração de recursos Laravel no WordPress
- ACF para criação de blocos personalizados

---

## 🚀 Como começar um novo projeto

### 1. Clone o repositório
```bash
git clone git@github.com:tortadecodigos/tdc-base.git nome-do-tema
cd nome-do-tema
rm -rf .git
```

### 2. Configure o `.env`
Crie um arquivo `.env` na raiz do tema com:

```env
APP_URL=http://localhost/sua-instancia
```

> Substitua pela URL local do seu WordPress.

### 3. Ajuste o caminho base no `vite.config.js`

```js
base: '/wp-content/themes/nome-do-tema/public/',
```

### 4. Instale as dependências
```bash
composer install
npm install
```

### 5. Gere os arquivos do tema
```bash
npm run build
```

> ⚠️ Esse passo é **obrigatório** para gerar o `manifest.json`. Sem isso, o tema exibirá o erro:
>
> `Vite manifest not found at /path/to/public/build/manifest.json`

---

## 📦 Estrutura do projeto

```
.
├── app/              # Configuração do tema (setup, filtros, etc.)
├── resources/
│   ├── views/        # Templates Blade
│   ├── css/          # Estilos com Tailwind
│   ├── js/           # Scripts do tema
├── public/           # Arquivos gerados pelo Vite (build final)
├── composer.json
├── vite.config.js
└── .env
```

---

## 📚 Créditos e base original

Este tema é baseado no [Sage](https://roots.io/sage/), da Roots, com ajustes e estrutura padronizada pela Torta de Códigos.

> Sage é um tema starter para WordPress com Blade, Tailwind e Vite. Saiba mais em [roots.io/sage](https://roots.io/sage).

---

## 🧁 Torta de Códigos

**Uma empresa especializada em terceirização de desenvolvimento WordPress para agências.**  
Saiba mais em: [https://tortadecodigos.com.br](https://tortadecodigos.com.br)