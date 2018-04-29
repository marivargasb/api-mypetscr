class SampleNameChangeColumnType < ActiveRecord::Migration[5.1]
  def change
    change_column :places, :user_id, :integer
    #Ex:- change_column("admin_users", "email", :string, :limit =>25)
  end
end
