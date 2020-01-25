<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<section class="section summary-section">
    <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/page_includes/summary_section_inc.php"
    ]) ?>
</section>
<section class="section experiences-section">
    <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">Lead Developer</h3>
                <div class="time">2015 - Present</div>
            </div>
            <div class="company">Startup Hubs, San Francisco</div>
        </div>
        <div class="details">
            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
        </div>
    </div>
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">Senior Software Engineer</h3>
                <div class="time">2014 - 2015</div>
            </div>
            <div class="company">Google, London</div>
        </div>
        <div class="details">
            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        </div>
    </div>
    <div class="item">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title">UI Developer</h3>
                <div class="time">2012 - 2014</div>
            </div>
            <div class="company">Amazon, London</div>
        </div>
        <div class="details">
            <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        </div>
    </div>
</section>
<section class="section projects-section">
    <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
    <div class="intro">
        <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
    </div>
    <div class="item">
        <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>
    </div>
    <div class="item">
        <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> -
        <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>
    </div>
    <div class="item">
        <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
    </div>
    <div class="item">
        <span class="project-title"><a href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
    </div>
    <div class="item">
        <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
    </div>
</section>
<section class="skills-section section">
    <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/page_includes/skills_section_inc.php"
    ]) ?>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>