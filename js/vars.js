var lensMatCols = jQuery('.lensmaterial-col'),
	lensTypeCols = jQuery('.lenstype-col'),
	lensTransitionCols = jQuery('.lenstransition-col'),
	lensAntiReflectionCols = jQuery('.lensreflaction-col'),
	frameArr = jQuery('.frame-wrap'),
	frames = jQuery('.frames'),
	optica = jQuery('.optica'),
	cart = jQuery('.cart-wrap'),

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
	infos = jQuery('.compare');

	imgReflection = new Image();
	imgReflection.src = 'img/compared/reflection.jpg',

	descriptionBlock = jQuery('.description-block');