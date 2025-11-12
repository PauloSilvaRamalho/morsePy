const apiUrl = 'http://localhost:3000';

async function atualizarEstado() {
  const resposta = await fetch(`${apiUrl}/estado`);
  const dados = await resposta.json();
  document.getElementById('morse').textContent = dados.estado;
}

async function enviarMorse(novoEstado) {
  await fetch(`${apiUrl}/estado`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ estado: novoEstado })
  });
  atualizarEstado();
}

document.getElementById('ligar').addEventListener('click', () => ('resultado'));

enviarMorse();