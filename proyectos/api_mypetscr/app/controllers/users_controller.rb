
class UsersController < ApplicationController
  before_action :set_user, only: [:show, :edit, :update, :destroy ]

  # GET /users
  def index
    @users = User.all
    render json: @users, status: 200

  end

  # GET /users/1
  # GET /users/1.json
  def show
    render json: @user, status: 200
  end



  # POST /users
  def create
    @user = User.new(user_params)
         #  byebug
   # respond_to do |format|
      if @user.save
        render json: @user, status: :created, location: @user
        #format.html { redirect_to @user, notice: 'User was successfully created.' }
        #format.json { render :show, status: :created, location: @user }
      else
        render json: @user.errors, status: :unprocessable_entity
       # format.html { render :new }
        #format.json { render json: @user.errors, status: :unprocessable_entity }
      end
    end
  

  # PATCH/PUT /users/1
  def update
   # respond_to do |format|
      if @user.update(user_params)
        render json: @user
      #  format.html { redirect_to @user, notice: 'User was successfully updated.' }
       # format.json { render :show, status: :ok, location: @user }
      else
        render json: @user.errors, status: :unprocessable_entity
       # format.html { render :edit }
       # format.json { render json: @user.errors, status: :unprocessable_entity }
      end
    end
  
    # DELETE /users/1
  def destroy
    @user.destroy
   # respond_to do |format|
   #   format.html { redirect_to users_url, notice: 'User was successfully destroyed.' }
   #   format.json { head :no_content }
    end
  

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_user
      @user = User.find(params[:id])
    end

    # Only allow a trusted parameter "white list" through.
    def user_params
      params.permit(:nombre, :apellido, :apellido2, :username, :"password", :nacimiento, :estado, :tipo, :imagen)
    end
end
