$(function () {
    $("#board-category_1,#board-category_2,#board-category_3").sortable({
        connectWith: "#board-category_1,#board-category_2,#board-category_3",
        items: ".task-item"
    });
});