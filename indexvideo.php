<?php include("Templates/header.php"); ?>
<style>
    .icon-bg-gray {
        color: white;
        padding: 0.6rem;
        border-radius: 0.5rem;
        font-size: 2rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .action-icon {
        cursor: pointer;
        font-size: 1.5rem;
        color: #555;
        transition: color 0.3s;
        user-select: none;
    }

    .action-icon:hover {
        color: rgb(100, 98, 98);
        /* Azul Bootstrap */
    }

    .action-icon:active {
        color: rgb(100, 98, 98);
        /* Azul Bootstrap */
    }


    .videoalign {
        margin-left: 12.5%;
    }

    .videoalign2 {
        margin-left: -20%;
    }

    .videoalign3 {
        margin-left: -57.5%;
    }

    .channel-avatar {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;

    }

    .channel-name {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .channel-stats {
        font-size: 0.9rem;
        color: #6c757d;
    }
</style>

<br>
<div class="text-center  "><video src="becane.mp4"
        controls
        muted
        autoplay
        class="w-75 h-100">
    </video>
    <br><br>
    <h2 class="text-white videoalign3 text-center">Becane - Colors</h2>
</div>
<br>

<div>
    <div class="videoalign">
        <div class="d-flex align-items-center gap-2 text-secondary text-center" style="font-size: 0.9rem;">
            <span>9.922 visualiz.</span>
            <span>|</span>
            <span>2 anos atrás</span>
            <div class="text-right"></div>
        </div>
    </div>
    <div class="container my-5 d-flex justify-content-center">
        <div class="d-flex align-items-center gap-4">
            <div class="d-flex gap-3">
                <button type="button" class="btn btn-dark" title="Curtir">
                    <i class="fa-solid fa-thumbs-up fa-lg icon-bg-gray"></i>
                </button>
                <button type="button" class="btn btn-dark" title="Não Curtir">
                    <i class="fa-solid fa-thumbs-down fa-lg icon-bg-gray"></i>
                </button>
                <button type="button" class="btn btn-dark " title="Amei">
                    <i class="fa-solid fa-heart fa-lg icon-bg-gray"></i>
                </button>
                <button type="button" class="btn btn-dark" title="Compartilhar">
                    <i class="fa-solid fa-share fa-lg icon-bg-gray"></i>
                </button>
                <button type="button" class="btn btn-dark" title="Adicionar à Playlist">
                    <i class="fa-solid fa-plus fa-lg icon-bg-gray"></i>
                </button>
                <button type="button" class="btn btn-dark" title="Denunciar">
                    <i class="fa-solid fa-flag fa-lg icon-bg-gray"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container my-4 videoalign2">
        <div class="d-flex align-items-center gap-3">
            <!-- Moldura do canal -->
            <img src="https://yt3.googleusercontent.com/WHonJT5d6apmBwprodxYwbA_azC4m3uRFc91ek7fUaZT8rtRVr-3YFVlffPkEg2ugwjnBJXjig=s160-c-k-c0x00ffffff-no-rj" alt="Avatar do Canal" class="channel-avatar" />

            <!-- Nome e stats -->
            <div>
                <div class="channel-name text-white">Professor Fernando Graciano</div>
                <div class="channel-stats d-flex gap-2">
                    <span>1.234 vídeos</span>
                    <span>|</span>
                    <span>56.789 inscritos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <button type="button" class="btn btn-dark text-secondary w-75 gap-3" title="Denunciar">
        <i class="fa-solid fa-wifi color-white gap-3"></i>
        Inscrever-se
    </button>
</div>

<div class="d-flex align-items-center justify-content-center my-4">
    <div class="border-top border-secondary w-25"></div>
    <span class="mx-3 text-secondary">ver mais</span>
    <div class="border-top border-secondary w-25"></div>
</div>

<BR><BR><BR>

<div class="text-center">
    <a href="indexfer.php" style="text-decoration: none; color: inherit; display: inline-block;">
        <div class="card mx-auto" style="width: 50rem;">
            <div class="video-time">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M8 5v14l11-7z" />
                </svg>
                <span id="videoDuration">14:27</span>
            </div>
            <img src="IMG/white.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="title-video">Professor Fernando Graciano</p>
                <p class="card-text">PROFESSOR FERNANDO - professor ensina a todos os alunos e alunas a como criar uma api em react</p>
            </div>
        </div>
    </a>
</div>

<div class="text-center">
    <a href="indexfer.php" style="text-decoration: none; color: inherit; display: inline-block;">
        <div class="card mx-auto" style="width: 50rem;">
            <div class="video-time">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M8 5v14l11-7z" />
                </svg>
                <span id="videoDuration">14:27</span>
            </div>
            <img src="IMG/white.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="title-video">Professor Fernando Graciano</p>
                <p class="card-text">PROFESSOR FERNANDO - professor ensina a todos os alunos e alunas a como criar uma api em react</p>
            </div>
        </div>
    </a>
</div>

<div class="text-center">
    <a href="indexfer.php" style="text-decoration: none; color: inherit; display: inline-block;">
        <div class="card mx-auto" style="width: 50rem;">
            <div class="video-time">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M8 5v14l11-7z" />
                </svg>
                <span id="videoDuration">14:27</span>
            </div>
            <img src="IMG/white.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="title-video">Professor Fernando Graciano</p>
                <p class="card-text">PROFESSOR FERNANDO - professor ensina a todos os alunos e alunas a como criar uma api em react</p>
            </div>
        </div>
    </a>
</div>

<div class="text-center">
    <a href="indexfer.php" style="text-decoration: none; color: inherit; display: inline-block;">
        <div class="card mx-auto" style="width: 50rem;">
            <div class="video-time">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M8 5v14l11-7z" />
                </svg>
                <span id="videoDuration">14:27</span>
            </div>
            <img src="IMG/white.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="title-video">Professor Fernando Graciano</p>
                <p class="card-text">PROFESSOR FERNANDO - professor ensina a todos os alunos e alunas a como criar uma api em react</p>
            </div>
        </div>
    </a>
</div>


<br><BR>

<?php include("Templates/footer.php"); ?>