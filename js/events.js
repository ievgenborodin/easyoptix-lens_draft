jQuery(document).ready(function() {
var lensMatCols = jQuery('.lensmaterial-col'),
	lensTypeCols = jQuery('.lenstype-col'),
	lensTransitionCols = jQuery('.lenstransition-col'),
	lensAntiReflectionCols = jQuery('.lensreflaction-col'),
	frameArr = jQuery('.frame-wrap'),
	frames = jQuery('.frames'),
	cart = jQuery('.cart-wrap'),

	currTypeIndex='',

	p_frame = 0,
	p_ltype = 0,
	p_lmaterial = 0,
	p_ltransition = 0,
	p_lreflaction = 0,
	p_total = 0,

	n_frame = '',
	n_ltype = '',
	n_lmaterial = '',
	n_ltransition = '',
	n_lreflaction = '',
		
	cart_p_frame = jQuery('.cart-frame-price'),
	cart_p_ltype = jQuery('.cart-lenstype-price'),
	cart_p_lmaterial = jQuery('.cart-lensmaterial-price'),
	cart_p_ltransition = jQuery('.cart-lenstransition-price'),
	cart_p_lreflaction = jQuery('.cart-lensreflection-price'),
	cart_p_total = jQuery('.cart-total-price'),

	cart_n_frame = jQuery('.cart-frame-name'),
	cart_n_ltype = jQuery('.cart-lenstype-name'),
	cart_n_lmaterial = jQuery('.cart-lensmaterial-name'),
	cart_n_ltransition = jQuery('.cart-lenstransition-name'),
	cart_n_lreflaction = jQuery('.cart-lensreflection-name'),

	darkie = jQuery('.dark-wrapper'),
	infos = jQuery('.compare'),

	descriptionBlock = jQuery('.description-block'),

	opticaBlock = jQuery('.optica'),
	typBlock = jQuery('.lenstype-block'),
	matBlock = jQuery('.lensmaterial-block'),
	adsBlock = jQuery('.lensaddons-block'),
	traBlock = jQuery('.transition-block'),
	cartBlock = jQuery('.cart-wrap');

function resetPrice(){
	p_frame = 0;
	p_ltype = 0;
	p_lmaterial = 0;
	p_ltransition = 0;
	p_lreflaction = 0;
	p_total = 0;
};

jQuery('.terms-agree').on('click', function(e){
	var that = jQuery(this);
	if (!that.hasClass('lens-button-on')) that.addClass('lens-button-on');
	if (typBlock.hasClass('hid')) typBlock.removeClass('hid');

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
	var ii = jQuery(this).data('infoindex');
	jQuery('.imagination > img').css('display','none').eq(ii).css('display', 'block');
	darkie.css('display', 'block').css('height', jQuery(document).height() + 'px');
});

darkie.on('click', function(e){
	jQuery(this).css('display', 'none');
});

frameArr.on('click', function(e){
	var that = jQuery(this), tmp;
	tmp = (that.hasClass('frame-selected')) ? false : true; 
	console.log(tmp);
	frameArr.removeClass('frame-selected');
	if (tmp) {
		p_frame = +that.data('price');
		n_frame = that.data('name');
		that.addClass('frame-selected') 
		frames.addClass('has-selected-frame');
		opticaBlock.removeClass('hid');	
	} else { 
		frames.removeClass('has-selected-frame');
		if (!opticaBlock.hasClass('hid')) opticaBlock.addClass('hid');
	};

	if (!cartBlock.hasClass('hid')) countPrice(); 
});

lensTypeCols.on('click', function(e){
	var that = jQuery(this);
	lensTypeCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	currTypeIndex = that.data('currtypeindex');
	p_ltype = +(that.find('.span-price').html());
	n_ltype = that.find('name').html();

	if (currTypeIndex == '2'){
		p_ltransition = 0;
		n_ltransition = 'None';
		lensTransitionCols.removeClass('lens-marked');
		if (!traBlock.hasClass('hid')) traBlock.addClass('hid');
	} else {
		if (traBlock.hasClass('hid')) traBlock.removeClass('hid');
	}
	if (matBlock.hasClass('hid')) matBlock.removeClass('hid');
	if (adsBlock.hasClass('hid')) adsBlock.removeClass('hid');
	if (!cartBlock.hasClass('hid')) countPrice();
});

lensMatCols.on('click', function(e){
	var that = jQuery(this);
	lensMatCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lmaterial = +(that.find('.span-price').html());
	n_lmaterial = that.find('name').html();

	if (!cartBlock.hasClass('hid')) countPrice();
});

lensTransitionCols.on('click', function(e){
	var that = jQuery(this);
	lensTransitionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_ltransition = +(that.find('.span-price').html());
	n_ltransition = that.find('name').html();

	if (!cartBlock.hasClass('hid')) countPrice();
});

lensAntiReflectionCols.on('click', function(e){
	var that = jQuery(this);
	lensAntiReflectionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lreflaction = +(that.find('.span-price').html());
	n_lreflaction = that.find('name').html();

	if (!cartBlock.hasClass('hid')) countPrice();
});

jQuery('.btn-to-cart').on('click', function(e){
	if (cartBlock.hasClass('hid')) cartBlock.removeClass('hid');

	countPrice();
});

function countPrice(){
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
};

});