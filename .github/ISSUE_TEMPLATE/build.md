---
name: build
about: Alterações em arquivos de configuração, scripts de build ou atualização de
  pacotes.
title: 'BUILD: buildTitle'
labels: build, dependencies
assignees: z0374

---

## 🛠️ O que mudou no processo?
Descreva a alteração na infraestrutura ou no sistema de build.
Ex: "Atualizar versão do Node.js no Dockerfile" ou "Adicionar nova dependência de criptografia via Composer".

## 📦 Dependências Afetadas
- **Adicionadas:**
- **Removidas:**
- **Atualizadas:**

## ✅ Checklist de Verificação
- [ ] O comando de build (`npm run build` / `composer install`) termina sem erros.
- [ ] As variáveis de ambiente (.env) foram atualizadas no servidor/Cloudflare.
- [ ] O projeto roda corretamente no ambiente local (**Linux Mint**).

## ⚠️ Impacto no Deploy
- ( ) Requer nova build em produção.
- ( ) Altera a versão mínima do Runtime (PHP/Node).
