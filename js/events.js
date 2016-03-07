function resetPrice(){
	p_frame = 0;
	p_ltype = 0;
	p_lmaterial = 0;
	p_ltransition = 0;
	p_lreflaction = 0;
	p_total = 0;
};

//allRecommended.removeClass('recommended-on');

jQuery('.terms-agree').on('click', function(e){
	lensTypeCols.eq(0).find('.recommended').addClass('recommended-on');
	lensTypeCols.eq(1).find('.recommended').addClass('recommended-on');

	lensMatCols.eq(1).find('.recommended').addClass('recommended-on');

	lensAntiReflectionCols.eq(1).find('.recommended').addClass('recommended-on');
	lensAntiReflectionCols.eq(2).find('.recommended').addClass('recommended-on');

	lensTransitionCols.eq(0).find('.recommended').addClass('recommended-on');
	lensTransitionCols.eq(1).find('.recommended').addClass('recommended-on');

	jQuery('.recommended-on').hover(function(){
		var that = jQuery(this),
		text = that.find('.why-text').html(),
		bb = that[0].getBoundingClientRect();

		descriptionBlock.css('display', 'block')
		.css('left', bb.left - bb.width + 'px')
		.css('top', bb.top - bb.height + jQuery(window).scrollTop() + 'px')
		.css('max-width', bb.width*2)
		.find('.description').html(text);
	}, function (){
		descriptionBlock.css('display', 'none');
	});
});

infos.on('click', function(e){
	darkie.css('display', 'block');
});

darkie.on('click', function(e){
	jQuery(this).css('display', 'none');
});

frameArr.on('click', function(e){
	var that = jQuery(this), tmp;
	tmp = (that.hasClass('frame-selected')) ? false : true; 
	frameArr.removeClass('frame-selected');
	if (tmp) {
		p_frame = +that.data('price');
		n_frame = that.data('name');
		that.addClass('frame-selected') 
		frames.addClass('has-selected-frame');
		optica.addClass('no-max-height');
		cart.addClass('no-max-height');
	} else { 
		frames.removeClass('has-selected-frame');
		optica.removeClass('no-max-height');
		cart.removeClass('no-max-height');
	};
});

lensTypeCols.on('click', function(e){
	var that = jQuery(this);
	lensTypeCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_ltype = +(that.find('span').html());
	n_ltype = that.find('name').html();
});

lensMatCols.on('click', function(e){
	var that = jQuery(this);
	lensMatCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lmaterial = +(that.find('span').html());
	n_lmaterial = that.find('name').html();
});

lensTransitionCols.on('click', function(e){
	var that = jQuery(this);
	lensTransitionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_ltransition = +(that.find('span').html());
	n_ltransition = that.find('name').html();
});

lensAntiReflectionCols.on('click', function(e){
	var that = jQuery(this);
	lensAntiReflectionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lreflaction = +(that.find('span').html());
	n_lreflaction = that.find('name').html();
});

jQuery('.btn-to-cart').on('click', function(e){
	p_total = p_frame + p_ltype + p_lmaterial + p_ltransition + p_lreflaction;
	cart_p_frame.html(p_frame);
	cart_p_ltype.html(p_ltype);
	cart_p_lmaterial.html(p_lmaterial);
	cart_p_ltransition.html(p_ltransition);
	cart_p_lreflaction.html(p_lreflaction);
	cart_p_total.html(p_total);

	cart_n_frame.html(n_frame);
	cart_n_ltype.html(n_ltype);
	cart_n_lmaterial.html(n_lmaterial);
	cart_n_ltransition.html(n_ltransition);
	cart_n_lreflaction.html(n_lreflaction);
});