<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seja Meu Guia</title>
  <style>
    body {
      font-family: Inter, Arial, sans-serif;
      background: #f4f7fb;
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background: #0077b6;
      color: white;
      text-align: center;
      padding: 1.5rem 0;
      font-size: 1.8rem;
      font-weight: bold;
    }
    main {
      max-width: 700px;
      margin: 2rem auto;
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    input, button {
      width: 100%;
      padding: 1rem;
      font-size: 1rem;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-bottom: 1rem;
    }
    button {
      background: #0096c7;
      color: white;
      border: none;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #0077b6;
    }
    .instrutor {
      background: #f0f8ff;
      border-left: 4px solid #0077b6;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>
  <header>🚘 Seja Meu Guia</header>
  <main>
    <h2>Encontre um instrutor na sua cidade</h2>
    <input id="cidade" type="text" placeholder="Digite sua cidade..." />
    <button onclick="buscarInstrutores()">Buscar Instrutores</button>
    <div id="resultado"></div>
  </main>
  <footer>© 2025 Seja Meu Guia — Todos os direitos reservados</footer>

  <script>
    const instrutores = [
      { nome: "Carlos Silva", cidade: "São Paulo", tipo: "Carro", contato: "(11) 99999-0000" },
      { nome: "Maria Oliveira", cidade: "Porto Alegre", tipo: "Moto", contato: "(51) 98888-2222" },
      { nome: "João Santos", cidade: "São Paulo", tipo: "Carro e Moto", contato: "(11) 97777-3333" },
      { nome: "Ana Costa", cidade: "Rio de Janeiro", tipo: "Carro", contato: "(21) 96666-4444" }
    ];

    function buscarInstrutores() {
      const cidade = document.getElementById('cidade').value.trim().toLowerCase();
      const resultado = document.getElementById('resultado');
      resultado.innerHTML = "";

      const encontrados = instrutores.filter(i => i.cidade.toLowerCase().includes(cidade));

      if (encontrados.length === 0) {
        resultado.innerHTML = "<p>Nenhum instrutor encontrado nessa cidade.</p>";
      } else {
        encontrados.forEach(i => {
          resultado.innerHTML += `
            <div class="instrutor">
              <strong>${i.nome}</strong><br>
              Cidade: ${i.cidade}<br>
              Tipo: ${i.tipo}<br>
              Contato: ${i.contato}
            </div>
          `;
        });
      }
    }
  </script>
</body>
</html>