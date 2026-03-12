---
name: heisenbug
about: Relate um erro que muda de comportamento ou desaparece ao tentar debugá-lo.
title: 'HEISENBUG: heisenbugTitle'
labels: bug-hunt, intermittent, investigation
assignees: z0374

---

## ❓ Descrição da Anomalia
O que está acontecendo de estranho e por que ele é um Heisenbug?
Ex: "O Worker do Telegram falha aleatoriamente, mas funciona perfeitamente quando ativo o modo `--dev`."

## 🕵️ Observações de Contexto (Onde ele se esconde?)
- **Ambiente:** ( ) Produção (Cloudflare)  ( ) Local (Wrangler/Node)
- **Frequência:** (Ex: Ocorre apenas após 100 requisições seguidas)
- **Estado do Sistema:** (O que estava rodando no momento? Algum script Python pesado em paralelo?)

## 🛰️ Telemetria e Logs
(Insira aqui IDs de requisição, prints do dashboard do Cloudflare ou logs do terminal que capturaram o momento da falha antes dela sumir)

## 💡 Hipóteses Técnicas
- [ ] Condição de corrida (Race Condition) no acesso ao KV/D1.
- [ ] Vazamento de memória em loops longos de JS.
- [ ] Problema de latência regional (Edge location específica).

## 🧪 Próximos Passos para "Cercar" o Bug
- [ ] Implementar `Sentry` ou `Logflare` para rastreio persistente.
- [ ] Adicionar blocos `try/catch` mais granulares em [nome do arquivo].
- [ ] Isolar a função X em um script de teste de carga.
