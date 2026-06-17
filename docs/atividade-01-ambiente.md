# Atividade 01 - Ambiente

## Comandos Executados

```bash
# Rodar as migrations padrao do Laravel
php artisan migrate

# Verificar o status das migrations
php artisan migrate:status
```

## Saida do php artisan migrate:status

```
  Migration name ....................... Batch / Status
  0001_01_01_000000_create_users_table ............... [1] Ran
  0001_01_01_000001_create_cache_table ............... [1] Ran
  0001_01_01_000002_create_jobs_table ................ [1] Ran
```

## Descricao das Colunas

| Coluna | Descricao |
|--------|-----------|
| Migration name | Nome do arquivo de migration |
| Batch | Numero do lote de execucao |
| Status | Ran = executada; Pending = pendente |

## Tabelas Criadas pelo Laravel

- users - Tabela de usuarios
- cache / cache_locks - Cache em banco
- jobs / job_batches / failed_jobs - Filas
- migrations - Meta-tabela de controle

