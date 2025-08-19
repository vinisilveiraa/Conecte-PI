# CENTRO PAULA SOUZA  
## FACULDADE DE TECNOLOGIA DE JAHU  
### CURSO DE TECNOLOGIA EM DESENVOLVIMENTO DE SOFTWARE MULTIPLATAFORMA  

---

# DOCUMENTO DA APLICAÇÃO WEB  
## **CONECTE**  
Plataforma digital que conecta cuidadores de saúde a pacientes que necessitam de acompanhamento e cuidados médicos.

**Jahu, SP**  
**1º semestre/2025**  

**Autores:**  
- Vinicius Leonardo Silveira  
- William Matias de Oliveira  
- Lucas Catto Silva  

---

# SUMÁRIO  

1. [RESUMO DA APLICAÇÃO WEB](#1-resumo-da-aplicação-web)  
2. [OBJETIVO](#2-objetivo)  
3. [MÉTODOS DA PESQUISA](#3-métodos-da-pesquisa)  
4. [DOCUMENTO DE REQUISITOS](#4-documento-de-requisitos)  
   - [Requisitos funcionais](#41-requisitos-funcionais)  
   - [Requisitos não funcionais](#42-requisitos-não-funcionais)  
   - [Modelo de casos de uso](#43-modelo-de-casos-de-uso)  
5. [REGRAS DE NEGÓCIO](#5-regras-de-negócio)  
6. [ESTUDO DE VIABILIDADE](#6---estudo-de-viabilidade)  
   - [Viabilidade Técnica](#61-viabilidade-técnica)  
   - [Viabilidade Econômica](#62-viabilidade-econômica)  
   - [Viabilidade Operacional](#63-viabilidade-operacional)  
   - [Viabilidade de Mercado](#64-viabilidade-de-mercado)  
7. [MODELO DE DADOS](#7-modelo-de-dados)  
   - [Modelo conceitual](#71-modelo-conceitual)  
   - [Modelo lógico](#72-modelo-lógico)  
8. [DESIGN](#8-design)  
9. [PROTÓTIPO](#9-protótipo)  
10. [APLICAÇÃO](#10-aplicação)  
11. [CONSIDERAÇÕES FINAIS](#11-considerações-finais)  
12. [REFERÊNCIAS BIBLIOGRÁFICAS](#12-referências-bibliográficas)  

---

## 1. RESUMO DA APLICAÇÃO WEB  

Atualmente, muitas famílias enfrentam dificuldades para encontrar cuidadores de confiança e devidamente qualificados. A busca por esses profissionais geralmente é feita de maneira informal, o que pode resultar em contratações inseguras.  

Ao mesmo tempo, cuidadores experientes enfrentam dificuldades para divulgar seus serviços.  

O aumento da expectativa de vida e a necessidade de cuidados especializados em casa tornam esse tema cada vez mais relevante.  

Este sistema surge como uma resposta moderna, segura e eficiente para aproximar quem precisa de cuidados de quem está capacitado para oferecer.  

Vivemos em um cenário tecnológico no qual muitas áreas já são digitalizadas. No entanto, o setor de cuidados domiciliares ainda carece de soluções organizadas.  

Assim, a proposta desta aplicação é centralizar informações, filtrar cuidadores, permitir avaliações e facilitar o contato.  

---

## 2. OBJETIVO  

- Facilitar a busca por cuidadores qualificados com base em filtros como localização, experiência e disponibilidade.  
- Criar perfis verificados com avaliações de outros usuários.  
- Valorizar o trabalho dos cuidadores, oferecendo visibilidade profissional.  
- Agilizar o processo de contratação com comunicação e agendamento direto com o cuidador.  
- Proporcionar segurança e confiabilidade no processo de seleção de cuidadores através de demonstração de seus currículos.  

---

## 3. MÉTODOS DA PESQUISA  

**Como?**  
- Coleta e análise de dados primários (entrevistas e questionários) e secundários (dados estatísticos e artigos).  
- Utilização de metodologia ágil (Scrum).  

**Com o quê?**  
- Google Forms, Visual Paradigm, Figma, HTML, CSS, JavaScript, Laravel, MySQL.  

**Onde?**  
- Ambientes virtuais: entrevistas online, desenvolvimento em ambiente local e posterior hospedagem online.  

**Quando?**  
- Mês 1: Pesquisa e levantamento de requisitos.  
- Mês 2: Prototipação e validação.  
- Meses 3 e 4: Desenvolvimento.  
- Mês 5: Testes e ajustes.  
- Mês 6: Entrega final e documentação.  

---

## 4. DOCUMENTO DE REQUISITOS  

Este documento especifica as funcionalidades esperadas da aplicação.  

### 4.1 Requisitos funcionais  

- **RF01:** Cadastrar cuidadores (nome, email, telefone, CPF, endereço, foto, currículo em PDF, senha criptografada).  
- **RF02:** Cadastrar usuários (familiares/pacientes).  
- **RF03:** Realizar Login/logout seguro.  
- **RF04:** Visualizar perfis de cuidadores com botão para exibir currículo.  
- **RF05:** Comunicação via mensagens ou agendamento (WhatsApp externo).  
- **RF06:** Atualizar perfil e disponibilidade.  
- **RF07:** Avaliar cuidadores (*não implementado*).  
- **RF08:** Enviar denúncias (*não implementado*).  

### 4.2 Requisitos não funcionais  

- **RNF01:** Disponibilidade 24/7.  
- **RNF02:** Responsividade (mobile, tablet e desktop).  
- **RNF03:** Desempenho (resposta < 2s).  
- **RNF04:** Criptografia de dados sensíveis.  
- **RNF05:** Conformidade com a LGPD.  
- **RNF06:** Usabilidade (UI simples e UX validada).  
- **RNF07:** Suporte inicial a 1000 usuários simultâneos.  
- **RNF08:** Backups automáticos.  
- **RNF09:** Interface intuitiva e acessível.  

### 4.3 Modelo de casos de uso  

Fonte: [Visual Paradigm Online](https://online.visual-paradigm.co)  

---

## 5. REGRAS DE NEGÓCIO  

*Imagem do modelo Canvas*  

Fonte: [Sebrae Canvas](https://canvas-apps.pr.sebrae.com.br)  

---

## 6 - ESTUDO DE VIABILIDADE  

### 6.1. Viabilidade Técnica  
Viável – Tecnologias adequadas, gratuitas e acessíveis.  

### 6.2. Viabilidade Econômica  
Viável – Baixo investimento, uso de ferramentas gratuitas.  

### 6.3. Viabilidade Operacional  
Viável – Resolve problema real com aderência à LGPD.  

### 6.4. Viabilidade de Mercado  
Viável – Nicho em expansão, pouca concorrência local, oportunidade estratégica.  

---

## 7. MODELO DE DADOS  

### 7.1 Modelo conceitual  
Fonte: Elaborado pelos autores.  

### 7.2 Modelo lógico  
Fonte: Elaborado pelos autores.  

---

## 8. DESIGN  

### 8.1 Paleta de cores  
- `#dcedf7`  
- `#a4cdeb`  
- `#6b8cb1`  

### 8.2 Cores e Estilo  
- Azul → calma, tecnologia, segurança, confiança.  

### 8.3 Tipografia  
- Roboto (padrão)  
- Lobster (complementar)  
- Poppins (complementar)  

### 8.4 Imagotipo  
- **Símbolo gráfico:** círculo azul-claro, medalha com coração branco.  
- **Nome da marca:** "Conecte" em tipografia cursiva escura, itálico.  

---

## 9. PROTÓTIPO  

Protótipo disponível no Figma: [Link para o figma](https://www.figma.com)  

---

## 10. APLICAÇÃO  

A aplicação foi desenvolvida em Laravel, com layout responsivo. Inclui login, busca, visualização de perfil e contato. Testes de usabilidade foram aplicados.  

---

## 11. CONSIDERAÇÕES FINAIS  

O desenvolvimento da aplicação permitiu compreender o processo de construção de sistemas web com foco social.  

Apesar das dificuldades (requisitos e validação), a aplicação tem potencial de impacto positivo, conectando cuidadores e famílias de forma segura e organizada.  

---

## 12. REFERÊNCIAS BIBLIOGRÁFICAS  

- BRASIL. Lei Geral de Proteção de Dados (LGPD): Lei nº 13.709, de 14 de agosto de 2018.  
- IBGE. Estatísticas sobre envelhecimento da população.  
- SEBRAE. Modelo Canvas. Disponível em: <https://canvas-apps.pr.sebrae.com.br>.  
- SOMMERVILLE, Ian. *Engenharia de software*. 9. ed. São Paulo: Pearson, 2011. ISBN 978-85-7936-108-1.  
- FIGMA. Disponível em: <https://www.figma.com>.  
- PEREIRA, Rubens Queiroz de Almeida. *BRModelo*. Disponível em: <https://github.com/rquellh/brModelo>.  
- VISUAL PARADIGM. Disponível em: <https://online.visual-paradigm.com>.  

