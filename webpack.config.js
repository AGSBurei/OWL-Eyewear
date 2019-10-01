var Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    //import img
    
    .addEntry('placeholder', './assets/images/placeholder.png')
    .addEntry('dummy', './assets/images/dummy.jpg')
    .addEntry('logopage', './assets/images/OWL_logo.png')
    .addEntry('favicon', './assets/images/favicon.ico')
    .addEntry('background', './assets/images/background.jpg')
    .addEntry('dummy2', './assets/images/dummy2.png')
    .addEntry('coatDetailEN', './assets/images/EN/lenscarac/coatdetail.png')
    .addEntry('coatTypeEN', './assets/images/EN/lenscarac/coattype.png')
    .addEntry('lensCaracEN,','./assets/images/EN/lenscarac/EN.png')
    .addEntry('glassSpecEN', './assets/images/EN/lenscarac/galssspec.png')
    .addEntry('glassDetailEN','./assets/images/EN/lenscarac/glassDetail.png')
    .addEntry('lblSolv', './assets/images/EN/solving/EN.png')
    .addEntry('gifSolv', './assets/images/EN/solving/FIGFINAL.gif')

    //fr img
    .addEntry('pngGraphGLSFR' , './assets/images/FR/01b.precisTech/FRcourbe.png')
    .addEntry('caracs1' , './assets/images/FR/01a.spec/caracs1.png')
    .addEntry('caracs2' , './assets/images/FR/01a.spec/caracs2.png')
    .addEntry('caracs3' , './assets/images/FR/01a.spec/caracs3.png')
    .addEntry('caracs4' , './assets/images/FR/01a.spec/caracs4.png')
    .addEntry('lblSpecFR' , './assets/images/FR/01a.spec/FR.png')
    .addEntry('pngGraphFR' , './assets/images/FR/01a.spec/graphique.png')
    .addEntry('pngCorrigeFR' , './assets/images/FR/01b.precisTech/corrige.png')
    .addEntry('pngFlouFR' , './assets/images/FR/01b.precisTech/Flou.png')
    .addEntry('pnpNet'  , './assets/images/FR/01b.precisTech/net.png')
    .addEntry('gifFigFinal', './assets/images/FR/02.solution/FIGFINAL.gif')
    .addEntry('pngFRSol', './assets/images/FR/02.solution/FR.png')
    .addEntry('pngFRStat', './assets/images/FR/03.stat/FR.png')
    .addEntry('pngCarac', './assets/images/FR/04.model/carac.png')
    .addEntry('pngFRModel', './assets/images/FR/04.model/FR.png')
    .addEntry('pngList' , './assets/images/FR/04.model/Liste.png')
    .addEntry('pngCustCxTail', './assets/images/FR/05.choixtaille/custom - 1.png')
    .addEntry('pngFRchx' , './assets/images/FR/05.choixtaille/FR.png')
    .addEntry('pngFRcont', './assets/images/FR/06.contenue/FR.png')
    .addEntry('pngFRAssem', './assets/images/FR/07.Assemblage/FR.png')
    .addEntry('pngCustBut', './assets/images/FR/08.but/custom - 1.png')
    .addEntry('pngFRBut', './assets/images/FR/08.but/FR.png')
    .addEntry('pngFRRoad', './assets/images/FR/09.roadmap/FR.png')
    .addEntry('pngRoad', './assets/images/FR/09.roadmap/Timeline FR.png')
    .addEntry('pngPack1', './assets/images/FR/10.pack/1.png')
    .addEntry('pngPack2', './assets/images/FR/10.pack/2.png')
    .addEntry('pngPack4' , './assets/images/FR/10.pack/4.png')
    .addEntry('pngFRPack', './assets/images/FR/10.pack/FR.png')
    .addEntry('pngFRcp', './assets/images/FR/11.CommentParticiper/FR.png')
    .addEntry('pngFRwho', './assets/images/FR/12.quisommenous/FR.png')
    .addEntry('pngUs13', './assets/images//FR/13/Besoin vous.png')
    .addEntry('pngNeed13', './assets/images/FR/13/Carac monture.png')
    .addEntry('pngVerre13', './assets/images/FR/13/carac verres.png')
    .addEntry('pngDetails13', './assets/images/FR/13/Details traitements.png')
    .addEntry('pngMyopi', './assets/images/FR/13/Myopi noc.png')
    .addEntry('pngMdl13', './assets/images/FR/13/Nos modSles.png')
    .addEntry('pngGlass13', './assets/images/FR/13/verres jaunes.png')
    .addEntry('pngPolas13', './assets/images/FR//13/verres polas.png')
    .addEntry('Opaque' , './assets/images/FR/Opaque.png')
    .addEntry('pngMancar', './assets/images/FR/bf3121dc2309cf78049447bcbda3c149_original.jpg')
    .addEntry('pnginfoSup', './assets/images/FR/01b.precisTech/FR.png')
    .addEntry('svgLogoNav', './assets/images/Fichier_4.svg')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/js/app.js')
    .addEntry('basesStyle', './assets/css/base.css')
    .addEntry('homeStyle', './assets/css/homeStyle.css')
    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabel(() => {}, {
        useBuiltIns: 'usage',
        corejs: 3
    })

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;

module.exports = Encore.getWebpackConfig();
