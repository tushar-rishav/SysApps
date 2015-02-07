class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :name
      t.integer :roll_number
      t.integer :mobile
      t.text :college
      t.integer :active

      t.timestamps
    end
  end
end
