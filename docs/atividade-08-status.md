# Atividade 08 - Status das Migrations

## Saida do php artisan migrate:status

```
  Migration name ....................... Batch / Status
  0001_01_01_000000_create_users_table ............... [1] Ran
  0001_01_01_000001_create_cache_table ............... [1] Ran
  0001_01_01_000002_create_jobs_table ................ [1] Ran
  2026_06_16_100000_create_clientes_table ............. [1] Ran
  2026_06_16_110000_create_produtos_table ............. [1] Ran
  2026_06_16_120000_create_categorias_table ........... [1] Ran
  2026_06_16_130000_add_categoria_id_to_produtos_table  [1] Ran
  2026_06_16_140000_refactor_categoria_fk_in_produtos   [1] Ran
  2026_06_16_150000_update_categoria_produtos_cascade . [1] Ran
  2026_06_16_160000_add_descricao_to_produtos_table ... [1] Ran
```

## Significado das Colunas

| Coluna | Descricao |
|--------|-----------|
| Migration name | Nome do arquivo de migration (sem .php) |
| Batch | Numero do lote de execucao |
| Status | Ran = executada; Pending = nao executada |

## Batch

Numero incremental que identifica o grupo de migrations de um mesmo
php artisan migrate. Rollback com --step=2 reverte os 2 ultimos batches.

## Saida apos php artisan migrate:rollback --step=2

```
  2026_06_16_160000_add_descricao_to_produtos_table ... REVERTED
  2026_06_16_150000_update_categoria_produtos_cascade . REVERTED
```

