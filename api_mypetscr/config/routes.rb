Rails.application.routes.draw do

 # With_options only: :create, :index, :show, :update, :destroy do |list_only|
 # resources :places, only: [:create, :index, :show, :update, :destroy]

 resources :places
 resources :users

  # get '/users/', to: 'users#index'
  # get '/users/:id', to: 'users#show'
  # post '/users/', to: 'users#create'
  # put '/users/', to: 'users#update'
  # patch '/users/', to: 'users#update'

 #  get '/places/', to: 'places#index'
  # get '/places/:id', to: 'places#show'
  # post '/places/', to: 'places#create'
  # put '/places/', to: 'places#update'
  # patch '/places/', to: 'places#update'


  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
