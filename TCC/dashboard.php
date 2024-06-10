<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">
<link rel="stylesheet" href="assets/css/alunos.css">
<link rel="stylesheet" href="assets/css/dashboard.css">

<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="dashboard">
        <header>
            <h1>Empréstimo de Chaves</h1>
        </header>
        <main>
            <div class="card">
                <h2>Total de Alunos Cadastrados</h2>
                <p id="total-alunos">0</p>
            </div>
            <div class="card">
                <h2>Total de Chaves Cadastradas</h2>
                <p id="total-chaves">0</p>
            </div>
            <div class="card">
                <h2>Total de Alunos para Devolver Chaves</h2>
                <p id="total-alunos-devolucao">0</p>
            </div>
            <div class="card">
                <h2>Total de Empréstimos Realizados</h2>
                <p id="total-emprestimos">0</p>
            </div>
        </main>
    </div>
    
</section>
<script src="assets/js/dashboard.js"></script>
</body>
</html>
