---
name: security
about: Gestão de credenciais, correção de vulnerabilidades e endurecimento (hardening)
  do sistema.
title: ''
labels: critical, security
assignees: z0374

---

## 🔒 Descrição da Necessidade
O que precisa ser protegido ou atualizado?
Ex: "Configurar CSP (Content Security Policy) no Linksfera" ou "Rotacionar Token do Bot do Telegram".

## 🛡️ Escopo de Segurança
- [ ] **Gestão de Secrets:** Criação, rotação ou remoção de chaves/tokens.
- [ ] **Vulnerabilidade:** Correção de falha detectada (ex: SQL Injection, XSS).
- [ ] **Hardening:** Melhoria em permissões de arquivos ou headers de API.
- [ ] **Auditoria:** Revisão de logs de acesso e permissões de usuários.

## 🗝️ Variáveis / Recursos Envolvidos
- **Alvo:** (Ex: GitHub Secrets, Cloudflare Environment, Arquivo `.env`)
- **Variável:** (Ex: `API_KEY_CLOUDFLARE`)

## ✅ Plano de Ação
- [ ] Identificar a origem do risco ou necessidade.
- [ ] Aplicar a nova configuração ou segredo.
- [ ] Testar se a mudança não quebrou a integração com [serviço X].
- [ ] Documentar a mudança (sem expor valores sensíveis).

## ⚠️ Alerta de Confidencialidade
**PROIBIDO** postar valores reais de tokens ou senhas nesta issue. Utilize apenas os nomes das variáveis. Se for uma vulnerabilidade crítica, trate com prioridade máxima.
