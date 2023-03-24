@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

<div class="container main-class py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <nav>
                <div class="nav nav-tabs tab-style" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">En</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Ar</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Fr</button>
                    <button class="nav-link" id="nav-fr-tab" data-bs-toggle="tab" data-bs-target="#nav-fr" type="button"
                        role="tab" aria-controls="nav-fr" aria-selected="false">Es</button>
                    <button class="nav-link" id="nav-ch-tab" data-bs-toggle="tab" data-bs-target="#nav-ch" type="button"
                        role="tab" aria-controls="nav-ch" aria-selected="false">ZH</button>
                </div>
            </nav>
            <div class="tab-content tab-text-style" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">At Musicians' Bazaar, we believe that music is a universal language that connects
                    people from all walks of life. As musicians ourselves, we understand the passion and dedication that
                    goes into playing, creating, and sharing music. That's why we created a platform where musicians can
                    easily connect with one another, buy and sell instruments and accessories, and grow their musical
                    careers.
                    <br><br>
                    Our mission is to make it easy for musicians to access the tools and resources they need to thrive
                    in the music industry. Whether you're a professional musician looking to upgrade your equipment or a
                    beginner just starting out, Musicians' Bazaar is the perfect place to find what you need. We offer a
                    wide selection of instruments and accessories, from guitars and keyboards to drum sets and audio
                    equipment.
                    <br><br>
                    But Musicians' Bazaar is more than just a marketplace - we're a community. We're passionate about
                    fostering connections between musicians, and we're dedicated to providing a supportive and inclusive
                    environment for all of our users. Whether you're looking to collaborate with other musicians, find a
                    new bandmate, or simply connect with like-minded individuals, Musicians' Bazaar is the place to be.
                    <br><br>
                    So if you're a musician looking to take your craft to the next level, join us at Musicians' Bazaar.
                    We can't wait to see where your musical journey takes you.
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">في سوق الموسيقيين، نؤمن بأن الموسيقى هي لغة عالمية تربط بين الناس من جميع المجالات
                    والأعمار. كموسيقيين أنفسنا، نفهم العاطفة والتفاني الذي يرافق العزف والإبداع ومشاركة الموسيقى. ولهذا
                    السبب، قمنا بإنشاء منصة تسمح للموسيقيين بالتواصل بسهولة مع بعضهم البعض، وبيع وشراء الآلات الموسيقية
                    والملحقات، والنمو في مساراتهم الموسيقية.
                    <br><br>
                    مهمتنا هي جعل الأدوات والموارد التي يحتاجها الموسيقيون للنجاح في صناعة الموسيقى سهلة الوصول إليها.
                    سواء كنت موسيقيًا محترفًا تسعى إلى ترقية معداتك أو مبتدئًا تبدأ مسيرتك الموسيقية، فإن سوق الموسيقيين
                    هو المكان المثالي للعثور على ما تحتاج إليه. نحن نقدم مجموعة واسعة من الآلات الموسيقية والملحقات،
                    بدءًا من الجيتار والكيبورد إلى طقم الدرام ومعدات الصوت.
                    <br><br>
                    ولكن سوق الموسيقيين ليس مجرد سوق - إنه مجتمع. نحن متحمسون لتعزيز الروابط بين الموسيقيين، ونحن
                    ملتزمون بتوفير بيئة داعمة وشاملة لجميع مستخدمينا. سواء كنت تبحث عن التعاون مع موسيقيين آخرين، أو
                    تريد العثور على شريك جديد للعزف، أو مجرد التواصل مع الأفراد ذوي نفس الاهتمامات، فسوق الموسيقيين هو
                    المكان المناسب.
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">Chez Musicians' Bazaar, nous croyons que la musique est un langage universel qui relie
                    les gens de tous les horizons. En tant que musiciens nous-mêmes, nous comprenons la passion et le
                    dévouement nécessaires pour jouer, créer et partager de la musique. C'est pourquoi nous avons créé
                    une plateforme où les musiciens peuvent facilement se connecter, acheter et vendre des instruments
                    et des accessoires, et développer leur carrière musicale.
                    <br><br>
                    Notre mission est de faciliter l'accès aux outils et aux ressources dont les musiciens ont besoin
                    pour réussir dans l'industrie musicale. Que vous soyez un musicien professionnel cherchant à mettre
                    à niveau votre équipement ou un débutant qui commence tout juste, Musicians' Bazaar est l'endroit
                    idéal pour trouver ce dont vous avez besoin. Nous offrons une large sélection d'instruments et
                    d'accessoires, des guitares et claviers aux batteries et équipements audio.
                    <br><br>
                    Mais Musicians' Bazaar est bien plus qu'un simple marché - nous sommes une communauté. Nous sommes
                    passionnés par la création de liens entre les musiciens, et nous nous engageons à offrir un
                    environnement de soutien et inclusif pour tous nos utilisateurs. Que vous cherchiez à collaborer
                    avec d'autres musiciens, à trouver un nouveau partenaire de groupe ou simplement à vous connecter
                    avec des personnes partageant les mêmes idées, Musicians' Bazaar est l'endroit idéal.
                    <br><br>
                    Alors si vous êtes musicien et que vous cherchez à perfectionner votre art, rejoignez-nous chez
                    Musicians' Bazaar. Nous avons hâte de voir où votre voyage musical vous mènera.
                </div>
                <div class="tab-pane fade" id="nav-fr" role="tabpanel" aria-labelledby="nav-fr-tab" tabindex="0">
                    En Musicians' Bazaar, creemos que la música es un lenguaje universal que conecta a personas de todas
                    las esferas de la vida. Como músicos nosotros mismos, entendemos la pasión y dedicación que se
                    requieren para tocar, crear y compartir música. Es por eso que creamos una plataforma donde los
                    músicos pueden conectarse fácilmente, comprar y vender instrumentos y accesorios, y hacer crecer sus
                    carreras musicales.
                    <br><br>
                    Nuestra misión es hacer que sea fácil para los músicos acceder a las herramientas y recursos que
                    necesitan para prosperar en la industria musical. Ya sea que seas un músico profesional buscando
                    actualizar tu equipo o un principiante que está comenzando, Musicians' Bazaar es el lugar perfecto
                    para encontrar lo que necesitas. Ofrecemos una amplia selección de instrumentos y accesorios, desde
                    guitarras y teclados hasta baterías y equipos de audio.
                    <br><br>
                    Pero Musicians' Bazaar es más que solo un mercado, somos una comunidad. Estamos apasionados por
                    fomentar conexiones entre músicos, y estamos comprometidos a proporcionar un ambiente de apoyo e
                    inclusivo para todos nuestros usuarios. Ya sea que estés buscando colaborar con otros músicos,
                    encontrar un nuevo compañero de banda o simplemente conectarte con personas afines, Musicians'
                    Bazaar es el lugar para estar.
                    <br><br>
                    Así que si eres un músico que busca llevar tu arte al siguiente nivel, únete a nosotros en
                    Musicians' Bazaar. Estamos ansiosos por ver a dónde te llevará tu viaje musical.
                </div>
                <div class="tab-pane fade" id="nav-ch" role="tabpanel" aria-labelledby="nav-ch-tab" tabindex="0">
                    在音乐家集市，我们相信音乐是一种普遍语言，可以连接来自各行各业的人们。作为音乐家，我们深知演奏、创作和分享音乐所需要的激情和奉献。因此，我们创建了一个平台，让音乐家们可以轻松地互相联系，买卖乐器和配件，并发展他们的音乐事业。
                    <br><br>
                    我们的使命是让音乐家们轻松获得在音乐行业中所需的工具和资源。无论您是一名专业音乐家想要升级您的设备，还是一个初学者刚刚开始，音乐家集市是寻找您需要的东西的完美地方。我们提供各种乐器和配件，从吉他和键盘到鼓组和音频设备。
                    <br><br>
                    但是音乐家集市不仅仅是一个市场 -
                    我们是一个社区。我们热衷于促进音乐家之间的联系，致力于为我们所有用户提供支持和包容的环境。无论您是想与其他音乐家合作、寻找新的乐队成员，还是仅仅想与志同道合的人联系，音乐家集市都是您要去的地方。
                    <br><br>
                    因此，如果您是一名音乐家，想要将自己的技艺提升到一个新的水平，请加入我们的音乐家集市。我们迫不及待地想看到您的音乐之旅将带您去哪里。
                </div>
            </div>
        </div>


    </div>
</div>

@endsection