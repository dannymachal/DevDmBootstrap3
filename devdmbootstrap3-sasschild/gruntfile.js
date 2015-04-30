module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.initConfig({
        compass: {
            compile: {
                options: {
                    sassDir: "sass",
                    specify: "sass/bootstrap.scss",
                    cssDir: "css",
                    outputStyle: "compressed"
                }//options
            }//dev
        }, //compass
        watch: {
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['compass:compile']
            } //sass
        } //watch
    }) //initconfig
    grunt.registerTask('default', 'watch');
} //exports