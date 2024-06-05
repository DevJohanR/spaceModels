import React from 'react'
import { CiInstagram, CiFacebook } from "react-icons/ci";
import Button from '../Button/Button';
import styles from './DesktopNavbar.module.css'

const DesktopNavbar = () => {
  return (
    <div className={styles.componentDesktopNavbar}>
        <div className={styles.social} > 
        <span><CiInstagram /></span>
        <span><CiFacebook /></span>
        
        </div>
       
       <div className={styles.btn}> <Button/></div>
       
    </div>
  )
}

export default DesktopNavbar