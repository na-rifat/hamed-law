const parent = $(`.tabbed-content`);

const index = parent.find(`.tab-index li`);
const body = parent.find(`.body`);

index.on(`click`, function (e) {
    let self = $(this);
    let i = self.index();

    if (self.hasClass(`active`)) return;

    body.fadeOut(0);
    index.removeClass(`active`);

    self.addClass(`active`);
    body.eq(i).fadeIn(600);
});


index.eq(0).click();