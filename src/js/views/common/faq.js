const parent = $(`.faq`);
const dur = 400;
const faqs = parent.find(`.faq-item`);
const faqHeader = faqs.find(`.faq-header`);
const faqBody = faqs.find(`.faq-body`);

faqHeader.on(`click`, function (e) {
    e.preventDefault();

    let self = $(this);
    let selfParent = self.parents(`.faq-item`);
    let index = selfParent.index();

    if (selfParent.hasClass(`active`)) {
        return;
    }

    faqs.removeClass(`active`);
    selfParent.addClass(`active`);

    faqBody.not(faqBody.eq(index)).slideUp(dur);
    faqBody.eq(index).slideDown(dur);
});

faqBody.slideUp(0);
