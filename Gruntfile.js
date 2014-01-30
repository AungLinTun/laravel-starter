/**
 * 
 */

module.exports = function (grunt) {

	'use strict';

	grunt.initConfig({
		pkg: '<json:package.json>',

		/**
		 * Watch
		 */
		watch: {
			app_sass: {
				files: [
					'app/assets/scss/**/*.scss',
					'bower_components/foundation/scss/**/*.scss'
				],
				tasks: ['sass:app']
			},

			uglify: {
				files: [
					'app/assets/javascripts/*.js'
				],
				tasks: ['uglify:app']
			},

			imagemin: {
				files: [
					'app/assets/images/**/*.{png,jpg,jpeg,gif}'
				],
				tasks: ['imagemin']
			}
		},

		/**
		 * SASS
		 */
		sass: {
			options: {
				style: 'compressed'
			},
			app: {
				files: {
					'public/stylesheets/application.css': 'app/assets/scss/application.scss'
				}
			}
		},

		/**
		 * Uglify
		 */
		uglify: {
			app: {
				files: {
					'public/javascripts/application.min.js': [
						'app/assets/javascripts/util/array.js',
						'app/assets/javascripts/util/string.js',
						'app/assets/javascripts/application.js'
					]
				}
			},

			vendor: {
				files: {
					'public/javascripts/jquery-1.10.2.min.js': 'bower_components/jquery/jquery.js',
					'public/javascripts/vendor.min.js': [
						'bower_components/foundation/js/vendor/custom.modernizr.js',
						'bower_components/fastclick/lib/fastclick.js'
					],
					'public/javascripts/polyfill.min.js': [
						'bower_components/html5shiv/dist/html5shiv.js',
						'bower_components/respond/dest/respond.min.js'
					]
				}
			}
		},

		/**
		 * ImageMin
		 */
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd:    'app/assets/images/',
					src:    ['**/*.{png,jpg,jpeg,gif}'],
					dest:   'public/images/'
				}]
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

	grunt.registerTask('default', [
		'sass',
		'uglify',
		'imagemin'
	]);

};