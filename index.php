<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Função para mostrar a modal de carregamento
            function showLoadingModal() {
                $("#loadingModal").show();
            }

            // Função para esconder a modal de carregamento
            function hideLoadingModal() {
                $("#loadingModal").hide();
            }

            // Contagem das requisições AJAX
            var totalRequests = $(".computer").length;
            var requestsCompleted = 0;

            // Iniciar contagem de progresso
            showLoadingModal();

            // Função para atualizar o progresso da barra
            function updateProgress(completed, total) {
                var percentage = Math.round((completed / total) * 100);
                $(".progress").css("width", percentage + "%");
            }

            $(".computer").each(function(){
                var ip = $(this).data('ip');
                var clickedComputer = $(this);
                
                $.ajax({
                    url: 'ping.php',
                    type: 'post',
                    data: {ip: ip},
                    success: function(response){
                        if(response == "online"){
                            clickedComputer.removeClass('offline').addClass('online');
                        } else {
                            clickedComputer.removeClass('online').addClass('offline');
                        }
                        requestsCompleted++;
                        updateProgress(requestsCompleted, totalRequests);

                        // Se todas as requisições forem concluídas, esconder a modal de carregamento
                        if (requestsCompleted === totalRequests) {
                            hideLoadingModal();
                        }
                    }
                });
            });

            $("button").click(function(){
                location.reload();
            });
        });
    </script>
</head>
<body>
    <div id="loadingModal" class="modal">
        <div class="modal-content">
            <p>Carregando...</p>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </div>


    <div class="background">
        <video autoplay muted loop id="bgVideo">
            <source src="./assets/background.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
    </div>

    <div class="content">
        <nav>
            <h1>Sistema de ping Braziline</h1>
            <button id="refreshButton">Refresh</button>
        </nav>
        
        <div class="row" id="TI">
            <div class="title">
                <h2>TI</h2>
                <i class="fa-solid fa-server"></i>
            </div>
            <div class="desk">
                <p>Gabriel</p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p>Bruno</p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p>Mauro</p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p>Claudio</p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p>Cris</p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Diretoria">
            <div class="title">
                <h2>Diretoria</h2>
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Compras">
            <div class="title">
                <h2>Compras</h2>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Vendas">
            <div class="title">
                <h2>Vendas</h2>
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Marketing">
            <div class="title">
                <h2>Marketing</h2>
                <i class="fa-solid fa-comments-dollar"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Estilo">
            <div class="title">
                <h2>Estilo</h2>
                <i class="fa-solid fa-shirt"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Aquario">
            <div class="title">
                <h2>Aquario</h2>
                <i class="fa-regular fa-square"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Corte">
            <div class="title">
                <h2>Corte</h2>
                <i class="fa-solid fa-scissors"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Estamparia">
            <div class="title">
                <h2>Estamparia</h2>
                <i class="fa-solid fa-paint-roller"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
        <div class="row" id="Estoque">
            <div class="title">
                <h2>Estoque</h2>
                <i class="fa-solid fa-boxes-packing"></i>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
            <div class="desk">
                <p></p>
                <div class="computer <?php echo $status ?>" data-ip="192.168.0">
                    <i class="fa-solid fa-computer"></i>
                    <span class="status-dot"></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>