import Vue from 'vue';

import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	
  state: {
    
    epicerieShoppingList: [],
      
    bricolageShoppingList: [] 
  },
  mutations: {
      
	  initShoppingList: function(state, payload) {
		
		  if ('epicerie' == payload.type) {  
			  
			  state.epicerieShoppingList = payload.shoppingList;
		  }
	      else if ('bricolage' == payload.type) {
	  
	    	  state.bricolageShoppingList = payload.shoppingList;
	      }
	  },
	  
      addItem: function(state, payload) {
          
			if ('epicerie' == payload.type) {
			                
			    state.epicerieShoppingList.push(payload.item);
			}
			else if ('bricolage' == payload.type) {
			
			    state.bricolageShoppingList.push(payload.item);
			}
      },
      
      removeItem: function(state, payload) {
        
    	  if ('epicerie' == payload.type) {
              
              let index = state.epicerieShoppingList.indexOf(payload.item);
              
              if (index > -1) {
                  
                  state.epicerieShoppingList.splice(index, 1);
              }
          }
          else if ('bricolage' == payload.type) {

              let index = state.bricolageShoppingList.indexOf(payload.item);
              
              if (index > -1) {
                  
                  state.bricolageShoppingList.splice(index, 1);
              }
          }  
      }
  },
  actions: {
	  
	  initShoppingListAction: function(context, payload) {
	      
		  if ('epicerie' == payload.type) {
		  
			  return new Promise((resolve) => {
			  
				  axios.get('/thirdlaravel/thirdlaravel/public/api/shoppingListItems/epicerie')
		      		.then(response => {
		      			
		      			let freshEpicerieShoppingList = [];
		      			
		      			for (let item of response.data) {
		      			
		      				freshEpicerieShoppingList.push(item);
		      			}
		      			
		      			payload.shoppingList = freshEpicerieShoppingList;
		      			
		      			context.commit('initShoppingList', payload);
		      			
		      			resolve();
		      	  });
			  });
		  }
		  else if ('bricolage' == payload.type) {
			  
			  return new Promise((resolve) => {
			  
				  axios.get('/thirdlaravel/thirdlaravel/public/api/shoppingListItems/bricolage')
		    		.then(response => {
		    		
		    			let freshBricolageShoppingList = [];
		    			
		    			for (let item of response.data) {
			      			
		    				freshBricolageShoppingList.push(item);
		      			}
		    			
		    			payload.shoppingList = freshBricolageShoppingList;
		    			
		    			context.commit('initShoppingList', payload);
		    			
		    			resolve();
		    	  });
			  });
		  }
	  },
  
	  addItemAction: function(context, payload) {
          
		  return new Promise((resolve) => {
        
			  axios
				  .post('/thirdlaravel/thirdlaravel/public/api/shoppingListItems', {
			            type: payload.item.type,
			            item: payload.item.item
		          })
		          .then(response => {
					
		        	  context.commit('addItem', payload);
				  			
				  	  resolve();
          	  });
		  });
      },
	  
	  removeItemAction: function(context, payload) {
	      		  
		  return new Promise((resolve) => {
			  
			  axios.delete('/thirdlaravel/thirdlaravel/public/api/shoppingListItems/' + payload.item.id)
			  		.then(response => {
				
			  			context.commit('removeItem', payload);
			  			
			  			resolve();
			  		});
  		  });
	  }
  }
});