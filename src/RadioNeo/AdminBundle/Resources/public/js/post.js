RadioNeo.ns('Admin.Post');

RadioNeo.Admin.Post = (function () {
    "use strict";

    /**
     * Inits new post page
     */
    function initNew() {
        initNewEdit();
    }

    /**
     * Inits edit post page
     */
    function initEdit() {
        initNewEdit();
    }

    /**
     * Common initializations for new and edit pages
     */
    function initNewEdit() {
        initPictureField();
        initAudioField();
        initTags();
    }

    function initPictureField() {
        $('#post_picture_file').fileinput();
    }

    function initAudioField() {
        $('#post_audio_file').fileinput();
    }

    /**
     * Inits tags input
     */
    function initTags() {
        $('.tags').selectize({
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
    }

    return {
        initNew: initNew,
        initEdit: initEdit,
    };
})();
