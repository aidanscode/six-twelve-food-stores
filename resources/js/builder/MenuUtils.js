const MenuUtils = {
  getDefaultMenu: () => {
    return {
      'Temperature': null,
      'Bread Type': null,
      'Meat': null,
      'Cheese': null,
      'Spread': null,
      'Topping': null
    };
  },
  getDietAssumptions: () => {
    return {
      calorieDiet: 2000,
      dailyValues: {
        total_fat: 64.7,
        saturated_fat: 20,
        trans_fat: 0,
        cholesterol: 300,
        sodium: 2404,
        carbohydrates: 300,
        dietary_fiber: 25,
        sugars: 0,
        protein: 0,
        vitamin_a: 900,
        vitamin_c: 90,
        calcium: 900,
        iron: 8
      }
    };
  },
  getNutritionUnits: () => {
    return {
      'calories': '',
      'total_fat': 'g',
      'saturated_fat': 'g',
      'trans_fat': 'g',
      'cholesterol': 'mg',
      'sodium': 'mg',
      'carbohydrates': 'g',
      'dietary_fiber': 'g',
      'sugars': 'g',
      'protein': 'g'
    };
  }
};

export default MenuUtils;
