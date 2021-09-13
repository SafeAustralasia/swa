<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:' ); ?></label> <br />
  <input type="text" id="<?php $this->get_field_id( 'title' )?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title' ) );?>" value="<?php echo $instance['title']; ?>" />
</p>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'details' ) ); ?>"><?php esc_attr_e( 'Details:' ); ?></label>
  <br />
  <textarea id="<?php $this->get_field_id( 'details' )?>"
    name="<?php echo esc_attr( $this->get_field_name( 'details' ) );?>" rows="4"
    cols="80"><?php echo $instance['details']; ?></textarea>
</p>