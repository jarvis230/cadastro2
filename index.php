<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="index.css">

<title>projeto 1</title>

</head>
<body>
  <header class="cabecalho">
      <div class="botoes">
          <button class="relatorio">baixar relatorio</button>
  </header>
    <main class="container">
      <form>
        <fieldset>
          <legend>dados do visitante</legend>
          <label for="name">Nome completo</label>
          <input id="name" type="text" name="name" required autofocus pattern="[A-Za-z ']{4,}" title="O nome precisa ter pelo menos 4 caracteres">
          <label for="email">E-mail</label>
          <input id="email" type="email" name="email" required placeholder="@email do visitante">
          <label for="number">telefone</label>
          <input id="number" type="number" name="number" required placeholder="telefone do visitante">
        </fieldset>
        <fieldset>
          <legend>Assunto</legend>

          <label>
            <input type="radio" name="assunto" value="Serviço">
            maior de idade
          </label>
        <fieldset>
          <input type="radio" name="assunto" value="Outro" id="outro">
          <label for="outro">
              menor de idade
          </label>
          <input type="text" name="outro-assunto">
        </fieldset>
        </fieldset>
        <label for="mensagem">Como soube do evento</label>
        <textarea id="mensagem" name="mensagem" cols="40" rows="10" placeholder="resposta do visitante"></textarea>
        <button type="submit">Salvar</button>
      </form>
    </main>
  </header>
</body>
</html>