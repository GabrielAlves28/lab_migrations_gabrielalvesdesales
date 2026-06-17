# Lab Migrations - Laravel

**Aluno:** Gabriel Alves de Sales
**Disciplina:** Programação Web I
**Professor:** Renato William R. de Souza
**Semestre:** 2026.1

---

## Descrição

Laboratório prático de versionamento de banco de dados com **Migrations no Laravel**, cobrindo criação de tabelas, tipos de dados, chaves estrangeiras, regras de exclusão, relacionamentos e diagnóstico de erros.

---

## Pré-requisitos

- PHP >= 8.2
- Composer >= 2.x
- SQLite (já incluso no PHP)

---

## Instruções de Execução

```bash
# 1. Clonar o repositório
git clone <url-do-repositorio>
cd lab_migrations

# 2. Instalar dependências
composer install

# 3. Configurar o ambiente
cp .env.example .env
php artisan key:generate

# 4. Criar banco SQLite
php -r "touch('database/database.sqlite');"
# No .env, verifique: DB_CONNECTION=sqlite

# 5. Rodar as migrations
php artisan migrate

# 6. Verificar status
php artisan migrate:status
```

---

## Status das Branches

| Branch | Descrição | Status |
|--------|-----------|--------|
| `main` | README e configuração base | ✅ Concluída |
| `atividade/01-ambiente` | Migrations padrão do Laravel | ✅ Concluída |
| `atividade/02-primeira-migration` | Tabela `clientes` | ✅ Concluída |
| `atividade/03-tipos-de-dados` | Tabela `produtos` com tipos variados | ✅ Concluída |
| `atividade/04-chave-estrangeira` | Tabela `categorias` + FK manual em `produtos` | ✅ Concluída |
| `atividade/05-foreignid` | Refatoração da FK com `foreignId()` | ✅ Concluída |
| `atividade/06-regras-exclusao` | Cascade em categorias-produtos | ✅ Concluída |
| `atividade/07-alteracao-tabela` | Adição de coluna `descricao` em `produtos` | ✅ Concluída |
| `atividade/08-status-migrations` | Análise do `migrate:status` | ✅ Concluída |
| `atividade/09-relacionamento1n` | Tabelas `pedidos` e `itens_pedido` | ✅ Concluída |
| `atividade/10-diagnostico-erros` | Correção de migration com erros | ✅ Concluída |
| `pratica/01-biblioteca` | Sistema de biblioteca (autores e livros) | ✅ Concluída |
| `pratica/02-sistema-academico` | Sistema acadêmico (cursos, alunos, matrículas) | ✅ Concluída |
| `pratica/03-gestao-projetos` | Gestão de projetos com tabela pivô | ✅ Concluída |

---

## Estrutura de Migrations

```
database/migrations/
├── (migrations padrão do Laravel)
├── xxxx_xx_xx_create_clientes_table.php
├── xxxx_xx_xx_create_categorias_table.php
├── xxxx_xx_xx_create_produtos_table.php
├── xxxx_xx_xx_add_categoria_id_to_produtos_table.php
├── xxxx_xx_xx_refactor_categoria_fk_in_produtos_table.php
├── xxxx_xx_xx_update_categoria_produtos_cascade.php
├── xxxx_xx_xx_add_descricao_to_produtos_table.php
├── xxxx_xx_xx_create_pedidos_table.php
├── xxxx_xx_xx_create_itens_pedido_table.php
├── xxxx_xx_xx_create_usuarios_corrigida_table.php
├── xxxx_xx_xx_create_autores_table.php
├── xxxx_xx_xx_create_livros_table.php
├── xxxx_xx_xx_create_cursos_table.php
├── xxxx_xx_xx_create_alunos_table.php
├── xxxx_xx_xx_create_matriculas_table.php
├── xxxx_xx_xx_create_colaboradores_table.php
├── xxxx_xx_xx_create_projetos_table.php
├── xxxx_xx_xx_create_projeto_colaborador_table.php
├── xxxx_xx_xx_create_tarefas_table.php
└── xxxx_xx_xx_add_prioridade_to_tarefas_table.php
```

---

## Convenção de Commits

Todos os commits seguem o padrão **Conventional Commits em PT-BR**:

```
feat: cria migration de clientes
fix: corrige tipo de dado em produtos
docs: adiciona README com instruções de execução
refactor: substitui FK manual por foreignId em produtos
```

---

## Licença

Projeto acadêmico - IFCE - ADS - Programação Web I - 2026.1
