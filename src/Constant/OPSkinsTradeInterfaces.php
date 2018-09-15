<?php

namespace OmerKocaoglu\OPSkinsTradeService\Constant;

class OPSkinsTradeInterfaces
{
    const GET_INVENTORY = 'https://api-trade.opskins.com/ITrade/GetUserInventory/v1/?';
    const SEND_OFFER = 'https://%s@api-trade.opskins.com/ITrade/SendOffer/v1/?';
    const GET_TRADE_URL = 'https://%s@api-trade.opskins.com/ITrade/GetTradeURL/v1/?';
    const GET_OFFERS = 'https://%s@api-trade.opskins.com/ITrade/GetOffers/v1/?';
    const GET_OFFER = 'https://%s@api-trade.opskins.com/ITrade/GetOffer/v1/?';
    const GET_ALL_SUPPORTED_APPS = 'https://api-trade.opskins.com/ITrade/GetApps/v1/?';
    const CANCEL_OFFER = 'https://%s@api-trade.opskins.com/ITrade/CancelOffer/v1/?';
    const ACCEPT_OFFER = 'https://%s@api-trade.opskins.com/ITrade/AcceptOffer/v1/?';
    const SEND_STEAM_OFFER = 'https://%s@api-trade.opskins.com/ITrade/SendOfferToSteamId/v1/?';
    const ITEMS_PRICE = 'https://api.opskins.com/IPricing/GetAllLowestListPrices/v1/?';//appid=730 
    const ITEMS = 'https://api-trade.opskins.com/IItem/GetItems/v1/?';//vgo饰品 only
    /*
		100: {
			1: {
				name: "AK-47 | Overdrive (Factory New)",
				category: "Covert Rifle",
				rarity: "Covert",
				type: "Rifle",
				paint_index: null,
				color: "#eb4b4b",
				image: {
				300px: "https://files.opskins.media/file/vgo-img/item/ak-47-overdrive-factory-new-300.png",
				600px: "https://files.opskins.media/file/vgo-img/item/ak-47-overdrive-factory-new-600.png"
				},
				suggested_price: 28922,
				suggested_price_floor: 23252
				},
		{
		  "wear_tier_index_map": {
		     "": 0,
		     "Factory New": 1,
		     "Minimal Wear": 2,
		     "Field-Tested": 3,
		     "Well-Worn": 4,
		     "Battle-Scarred": 5
		  },
		  "wear_tier_index_to_float_map": {
		     "1": {
		        "min": 0,
		        "max": 0.06999999999999
		     },
		     "2": {
		        "min": 0.07,
		        "max": 0.14999999999999
		     },
		     "3": {
		        "min": 0.15,
		        "max": 0.37999999999999
		     },
		     "4": {
		        "min": 0.38,
		        "max": 0.44999999999999
		     },
		     "5": {
		        "min": 0.45,
		        "max": 1
		     }
		  }
		}
    */
}
